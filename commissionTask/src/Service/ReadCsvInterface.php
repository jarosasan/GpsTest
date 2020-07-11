<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Service;

interface ReadCsvInterface
{
    public function importCsvToArray(string $path): array;

    public function exportToCsv(array $array, string $fileName);
}
