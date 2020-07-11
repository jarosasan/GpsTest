<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Service;

/**
 * Class Calculate
 *
 */
class Calculate implements CalculateInterface
{
    private $math;

    public function __construct(MathInterface $math)
    {
        $this->math = $math;
    }

    /**
     * Return rounded  value.
     *
     * @param string $num
     *
     * @return string
     */
    public function roundNum(string $num): string
    {
//        $rounded = round(floatval($num), 2, PHP_ROUND_HALF_UP);
        $rounded= ceil(floatval($num) * 100) / 100;

        return strval($rounded);
    }

    /**
     * Return percent of the amount.
     *
     * @param string $amount
     * @param string $percent
     *
     * @return string
     */
    public function getPercentFromAmount(string $amount, string $percent): string
    {
        $num = $this->math->div($percent, '100');

        return $this->math->mult($amount, $num);
    }

    /**
     * Exchange money to default currency.
     *
     * @param string $amount
     * @param string $rate
     *
     * @return string
     */
    public function currencyExchangeToDefault(string $amount, string $rate): string
    {
        return $this->math->div($amount, $rate);
    }

    /**
     * Exchange money from default currency to operation currency.
     *
     * @param string $amount
     * @param string $currency
     *
     * @return string
     */
    public function currencyExchange(string $amount, string $currency): string
    {
        return $this->math->mult($amount, $currency);
    }
}
