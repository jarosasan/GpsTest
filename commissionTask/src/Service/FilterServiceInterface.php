<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Service;

interface FilterServiceInterface
{
    public function sortByDate(array $array): array;

    public function filterByUserId(array $array, string $id): array;

    public function filterByUserType(array $array, string $userType): array;

    public function isOpTypeCashIn(string $oprType): bool;

    public function isOpTypeCashOut(string $oprType): bool;

    public function keyExistsInArray(array $array, string $key): bool;

    public function isUserTypeLegal(string $userType): bool;

    public function isUserTypeNatural(string $userType): bool;
}
