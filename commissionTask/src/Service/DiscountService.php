<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Service;

class DiscountService implements DiscountServiceInterface
{
    /**
     * @var int
     */
    private $defaultDiscount = 1000;
    /**
     * @var array
     */
    private $discountArray = [];

    /**
     * Default data about single operation discount.
     *
     * @var array
     */
    private $singleDiscount = ['date' => '', 'discount' => 1000, 'i' => 0];

    /**
     * Return amount after discount or 0.
     *
     * @return mixed|string
     */
    public function getAmountAfterDiscount(string $id, string $date, int $amount): int
    {
        if (!array_key_exists($id, $this->discountArray)) {
            return $this->saveDiscount($this->singleDiscount, $id, $date, $amount, $this->defaultDiscount);
        } else {
            $field = $this->discountArray[$id];

            if ($this->checkDate($field['date'], $date)) {
                if ($field['i'] > 3 || $field['discount'] <= 0) {
                    $this->saveDiscount($field, $id, $date, $amount, 0);

                    return $amount;
                } else {
                    return $this->saveDiscount($field, $id, $date, $amount, $field['discount']);
                }
            } else {
                return $this->saveDiscount($field, $id, $date, $amount, $this->defaultDiscount);
            }
        }
    }

    /**
     * Creating an array with single operation discount information.
     */
    private function createUserDisLine(array $singleDiscountArray, string $date, int $discount): array
    {
        $singleDiscountArray['date'] = $date;
        $singleDiscountArray['discount'] = abs($discount);
        $singleDiscountArray['i'] = $singleDiscountArray['i'] + 1;

        return $singleDiscountArray;
    }

    private function getAmount(int $a, int $d): int
    {
        return $a - $d;
    }

    /**
     * Checks if the days are from the same week.
     */
    private function checkDate(string $savedDate, string $newDate): bool
    {
        $current = strtotime($newDate);
        $monday = strtotime('monday this week', strtotime($savedDate));
        $sunday = strtotime('sunday this week', strtotime($savedDate));

        return $current >= $monday && $current <= $sunday;
    }

    /**
     * Saved single operation discount info to array and return amount after discount.
     */
    private function saveDiscount(array $array, string $id, string $date, int $amount, int $discount): int
    {
        $withDiscount = $this->getAmount($amount, $discount);

        if ($withDiscount <= 0) {
            $this->discountArray[$id] = $this->createUserDisLine($array, $date, $withDiscount);

            return 0;
        } else {
            $this->discountArray[$id] = $this->createUserDisLine($array, $date, 0);

            return $withDiscount;
        }
    }
}
