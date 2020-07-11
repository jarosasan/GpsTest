<?php
declare(strict_types=1);
namespace Paysera\CommissionTask\Tests\Service;

use Paysera\CommissionTask\Service\FilterService;
use PHPUnit\Framework\TestCase;

class FilterServiceTest extends TestCase
{


    /**
     * @var filterService
     */

    private $filterService;

    public function setUp()
    {
        $this->filterService = new FilterService();
    }

    /**
     * @param string $operation
     * @param bool $expectation
     *
     * @dataProvider dataProviderForIsOpTypeCashInTesting
     */
    public function testIsOpTypeCashIn(string $operation, bool $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->filterService->isOpTypeCashIn($operation)
        );
    }

    public function dataProviderForIsOpTypeCashInTesting(): array
    {
        return [
            'cash_in' => ['cash_in', true],
            'cash_out' => ['cash_out', false],
            'empty' => ['', false]
        ];
    }


    /**
     * @param string $operation
     * @param bool $expectation
     *
     * @dataProvider dataProviderForIsOpTypeCashOutTesting
     */
    public function testIsOpTypeCashOut(string $operation, bool $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->filterService->isOpTypeCashOut($operation)
        );
    }

    public function dataProviderForIsOpTypeCashOutTesting(): array
    {
        return [
            'cash_in' => ['cash_in', false],
            'cash_out' => ['cash_out', true],
            'empty' => ['', false]
        ];
    }


    /**
     * @param string $userType
     * @param bool $expectation
     *
     * @dataProvider dataProviderForIsUserTypeLegalTesting
     *
     */
    public function testIsUserTypeLegal(string $userType, bool $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->filterService->isUserTypeLegal($userType)
        );
    }

    public function dataProviderForIsUserTypeLegalTesting(): array
    {
        return [
            'user type equal legal' => ['legal', true],
            'user type not equal legal' => ['natural', false],
            'user type is empty' => ['', false]
        ];
    }


    /**
     * @param string $userType
     * @param bool $expectation
     *
     * @dataProvider dataProviderForIsUserTypeNaturalTesting
     */
    public function testIsUserTypeNatural(string $userType, bool $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->filterService->isUserTypeNatural($userType)
        );
    }

    public function dataProviderForIsUserTypeNaturalTesting(): array
    {
        return [
            'user type equal natural' => ['natural', true],
            'user type not equal legal' => ['legal', false],
            'user type is empty' => ['', false]
        ];
    }


    /**
     * @param array $array
     * @param array $expectation
     *
     * @dataProvider dataProviderForSortByDateTesting
     */
    public function testSortByDate(array $array, array $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->filterService->sortByDate($array)
        );
    }

    public function dataProviderForSortByDateTesting(): array
    {
        $myArray = [
            ["date"=>"2014-12-31"],
            ["date"=>"2014-10-31"],
            ["date"=>"2014-09-31"],
            ["date"=>"2014-09-30"],
            ["date"=>"2015-12-31"],
            ["date"=>"2014-09-01"]
        ];

        $myExpectationArray = [
            ["date"=>"2014-09-01"],
            ["date"=>"2014-09-30"],
            ["date"=>"2014-09-31"],
            ["date"=>"2014-10-31"],
            ["date"=>"2014-12-31"],
            ["date"=>"2015-12-31"]
        ];
        return [
            'array sort' => [$myArray, $myExpectationArray]
        ];
    }


    /**
     * @param array $array
     * @param string $key
     * @param bool $expectation
     *
     * @dataProvider dataProviderForKeyExistsInArrayTesting
     */
    public function testKeyExistsInArray(array $array, string $key, bool $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->filterService->keyExistsInArray($array, $key)
        );
    }

    public function dataProviderForKeyExistsInArrayTesting(): array
    {
        $myArray = [
            "1"=>"a",
            "2"=>"b",
            "p"=>"c",
        ];

        return [
            'key 1 exists in array' => [$myArray, '1', true],
            'key p exists in array' => [$myArray, 'p', true],
            'key 3 exists in array' => [$myArray, '3', false],
            'key not exists in array' => [$myArray, 'a', false],
        ];
    }
}
