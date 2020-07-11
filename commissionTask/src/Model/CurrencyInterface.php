<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Model;

interface CurrencyInterface
{
    public function availableCurrency(string $currency): bool;

    public function getAllCurrencies(): array;

    public function getCurrencyRate(string $currency): string;

    /**
     * @param string $defaultCurrency
     */
    public function getDefaultCurrency(): string;
}
