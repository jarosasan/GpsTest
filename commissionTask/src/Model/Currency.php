<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Model;

class Currency implements CurrencyInterface
{
    protected static $currencies = ['EUR', 'USD', 'JPY'];
    protected static $currencyRate = ['EUR' => '1', 'USD' => '1.1497', 'JPY' => '129.53'];
    private static $defaultCurrency = 'EUR';

    protected $currenciesList;
    protected $currencyRateList;
    protected $dCurrency;

    public function __construct()
    {
        $this->currenciesList = self::$currencies;
        $this->currencyRateList = self::$currencyRate;
        $this->dCurrency = self::$defaultCurrency;
    }

    /**
     * {@inheritdoc}
     */
    public function availableCurrency(string $currency): bool
    {
        return in_array($currency, $this->currenciesList, true);
    }

    public function getCurrencyRate(string $currency): string
    {
        return $this->currencyRateList[$currency];
    }

    public function getAllCurrencies(): array
    {
        return $this->currenciesList;
    }

    public function getDefaultCurrency(): string
    {
        return $this->dCurrency;
    }
}
