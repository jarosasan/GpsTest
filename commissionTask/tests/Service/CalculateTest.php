<?php
declare(strict_types=1);
namespace Paysera\CommissionTask\Tests\Service;

use Paysera\CommissionTask\Service\Calculate;
use Paysera\CommissionTask\Service\Math;
use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{

    private $calculate;

    public function setUp()
    {
        $this->calculate = new Calculate(new Math());
    }

    /**
     * @param string $amount
     * @param string $currency
     * @param string $expectation
     *
     * @dataProvider dataProviderForCurrencyExchangeTesting
     */
    public function testCurrencyExchange(string $amount, string $currency, string $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->calculate->currencyExchange($amount, $currency)
        );
    }

    public function dataProviderForCurrencyExchangeTesting(): array
    {
        return [
            'amount 1, currency rate 1' => ['1', '1', '1'],
            'amount 10, currency rate 1.25' => ['10', '1.25', '12.5'],
            'amount 11.3333, currency rate 10.22' => ['11.3333', '10.22', '115.826326']
        ];
    }

    /**
     * @param string $amount
     * @param string $percent
     * @param string $expectation
     *
     * @dataProvider dataProviderForGetPercentFromAmountTesting
     */
    public function testGetPercentFromAmount(string $amount, string $percent, string $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->calculate->getPercentFromAmount($amount, $percent)
        );
    }

    public function dataProviderForGetPercentFromAmountTesting(): array
    {
        return [
            'amount 1, percent 10' => ['1', '10', '0.1000000000'],
            'amount 10, percent 0.3' => ['10', '0.3', '0.03000000000'],
            'amount 100.00, percent 3.3' => ['100.00', '3.3', '3.300000000']
        ];
    }

    /**
     * @param string $amount
     * @param string $currency
     * @param string $expectation
     *
     * @dataProvider dataProviderForCurrencyExchangeToDefaultTesting
     */
    public function testCurrencyExchangeToDefault(string $amount, string $currency, string $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->calculate->currencyExchangeToDefault($amount, $currency)
        );
    }

    public function dataProviderForCurrencyExchangeToDefaultTesting(): array
    {
        return [
            'amount 10, rate 1.2456' => ['10', '1.2456', '8.0282594733'],
            'amount 3030, rate 1' => ['3030', '1', '3030'],
            'amount 180.22 rate 198.22' => ['180.22', '198.22', '0.9091918070']
        ];
    }


    /**
     * @param string $num
     * @param string $expectation
     *
     * @dataProvider dataProviderForRoundNumTesting
     */
    public function testRoundNum(string $num, string $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->calculate->roundNum($num)
        );
    }

    public function dataProviderForRoundNumTesting(): array
    {
        return [
            'round 0.222223' => ['0.222223', '0.23'],
            'round 156.999' => ['156.999', '157.00'],
            'round -11.5555' => ['-11.5555', '-11.55'],

        ];
    }
}
