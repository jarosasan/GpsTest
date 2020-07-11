<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Controller;

use Paysera\CommissionTask\Model\Currency;
use Paysera\CommissionTask\Service\Calculate;
use Paysera\CommissionTask\Service\DiscountService;
use Paysera\CommissionTask\Service\FilterService;
use Paysera\CommissionTask\Service\Math;
use Paysera\CommissionTask\Service\ReadCsv;

class MainController
{
    const CASH_IN_FEE = '0.03';
    const CASH_OUT_FEE = '0.3';
    const MAX_IN_FEE = '5.00';
    const MIN_OUT_FEE = '0.50';

    public function start($pathToFile)
    {
        $readCsv = new ReadCsv();
        $calc = new Calculate(new Math());
        $discountService = new DiscountService();
        $currency = new Currency();
        $filter = new FilterService();

        $csvArray = $readCsv->importCsvToArray($pathToFile);
        $arrayByDate = $filter->sortByDate($csvArray);
$a =[];
        foreach ($arrayByDate as $operation) {
            if ($filter->isUserTypeNatural($operation['user_type']) && $filter->isOpTypeCashOut($operation['operation_type'])) {
                $rate = $currency->getCurrencyRate($operation['currency']);
                $amountInDefaultCurrency = $calc->currencyExchangeToDefault($operation['amount'], $rate);
                $amount = $discountService->getAmountAfterDiscount($operation['user_id'], $operation['date'], intval($amountInDefaultCurrency));
                if ($amount > 0) {
                    $inOperationCurrency = $calc->currencyExchange(strval($amount), $rate);
                    $operation['fee'] = $calc->roundNum($calc->getPercentFromAmount($inOperationCurrency, self::CASH_OUT_FEE));
                } else {
                    $operation['fee'] = 0;
                }
            } elseif ($filter->isUserTypeLegal($operation['user_type']) && $filter->isOpTypeCashOut($operation['operation_type'])) {
                $fee = $calc->roundNum($calc->getPercentFromAmount($operation['amount'], self::CASH_OUT_FEE));
                $operation['fee'] = ($fee <= self::MIN_OUT_FEE) ? self::MIN_OUT_FEE : $fee;
            } else {
                $fee = $calc->roundNum($calc->getPercentFromAmount($operation['amount'], self::CASH_IN_FEE));
                $operation['fee'] = ($fee >= self::MAX_IN_FEE) ? self::MAX_IN_FEE : $fee;
            }
            $a[]= $operation;
            $out = fopen('php://output', 'w');

            fputs($out, $operation['fee']."\n");

            fclose($out);
        }
 $readCsv->exportToCsv($a, "namas.csv");
    }
}
