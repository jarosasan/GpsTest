<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Service;

class FilterService implements FilterServiceInterface
{
    const TYPE_CASH_IN = 'cash_in';
    const TYPE_CASH_OUT = 'cash_out';
    const USER_TYPE_NATURAL = 'natural';
    const USER_TYPE_LEGAL = 'legal';

    /**
     *Sort array bu date field.
     *
     * @param array $array
     *
     * @return array
     */
    public function sortByDate(array $array): array
    {
        usort($array, [$this, 'date_compare']);

        return $array;
    }

    /**
     * @param array $array
     * @param string $id
     *
     * @return array
     */
    public function filterByUserId(array $array, string $id): array
    {
        return array_filter($array, function ($var) use ($id) {
            return $var['user_id'] === $id;
        });
    }

    /**
     * @param $a
     * @param $b
     *
     * @return false|int
     */
    public function date_compare($a, $b)
    {
        if (strtotime($a['date']) === strtotime($b['date'])) {
            return 0;
        }

        return (strtotime($a['date']) < strtotime($b['date'])) ? -1 : 1;
    }

    /**
     * @param string $oprType
     *
     * @return bool
     */
    public function isOpTypeCashIn(string $oprType): bool
    {
        return $oprType === self::TYPE_CASH_IN;
    }

    /**
     * @param string $oprType
     *
     * @return bool
     */
    public function isOpTypeCashOut(string $oprType): bool
    {
        return $oprType === self::TYPE_CASH_OUT;
    }

    /**
     * @param string $userType
     *
     * @return bool
     */
    public function isUserTypeNatural(string $userType): bool
    {
        return $userType === self::USER_TYPE_NATURAL;
    }

    /**
     * @param string $userType
     *
     * @return bool
     */
    public function isUserTypeLegal(string $userType): bool
    {
        return $userType === self::USER_TYPE_LEGAL;
    }

    /**
     * @param array $array
     * @param string $userType
     *
     * @return array
     */
    public function filterByUserType(array $array, string $userType): array
    {
        return array_filter($array, function ($var) use ($userType) {
            return $var['user_type'] === $userType;
        });
    }

    /**
     * @param array $array
     * @param string $key
     *
     * @return bool
     */
    public function keyExistsInArray(array $array, string $key): bool
    {
        return array_key_exists($key, $array);
    }
}
