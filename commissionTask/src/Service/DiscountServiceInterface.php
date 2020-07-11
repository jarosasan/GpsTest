<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Service;

interface DiscountServiceInterface
{
    public function getAmountAfterDiscount(string $id, string $date, int $amount): int;
}
