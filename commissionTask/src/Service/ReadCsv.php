<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Service;

class ReadCsv implements ReadCsvInterface
{
    private $arrayOfKeys = ['date', 'user_id', 'user_type', 'operation_type', 'amount', 'currency'];

    /**
     *Importing data from file to the array.
     */
    public function importCsvToArray(string $path): array
    {
        $lines = explode("\n", file_get_contents($path));
        $result = [];
        foreach ($lines as $line) {
            $row = [];
            foreach (str_getcsv($line) as $key => $field) {
                $row[$this->arrayOfKeys[$key]] = $field;
            }
            $row = array_filter($row);
            $result[] = $row;
        }

        return $result;
    }

    /**
     * Exporting data from the array to the file.
     */
    public function exportToCsv(array $array, string $fileName)
    {
        $fp = fopen($fileName, 'w');

        foreach ($array as $key => $value) {
            fputcsv($fp, $value);
        }

        fclose($fp);
    }
}
