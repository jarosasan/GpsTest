<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Service;

interface CalculateInterface
{
    public function roundNum(string $num): string;

    public function getPercentFromAmount(string $amount, string $percent): string;
}
