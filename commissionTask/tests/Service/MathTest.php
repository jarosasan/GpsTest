<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Tests\Service;

use PHPUnit\Framework\TestCase;
use Paysera\CommissionTask\Service\Math;

class MathTest extends TestCase
{
    /**
     * @var Math
     */
    private $math;

    public function setUp()
    {
        $this->math = new Math(2);
    }

    /**
     * @param string $leftOperand
     * @param string $rightOperand
     * @param string $expectation
     *
     * @dataProvider dataProviderForAddTesting
     */
    public function testAdd(string $leftOperand, string $rightOperand, string $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->math->add($leftOperand, $rightOperand)
        );
    }

    public function dataProviderForAddTesting(): array
    {
        return [
            'add 2 natural numbers' => ['1', '2', '3'],
            'add negative number to a positive' => ['-1', '2', '1'],
            'add natural number to a float' => ['1', '1.05123', '2.05'],
        ];
    }

    /**
     * @param string $leftOperand
     * @param string $rightOperand
     * @param string $expectation
     *
     * @dataProvider dataProviderForDivTesting
     */
    public function testDiv(string $leftOperand, string $rightOperand, string $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->math->div($leftOperand, $rightOperand)
        );
    }

    public function dataProviderForDivTesting(): array
    {
        return [
            'divide a natural number' => ['1', '2', '0.5'],
            'divide a negative number' => ['-1', '2', '-0.5'],
            'divide a float number' => ['2.66', '2', '1.33'],
        ];
    }


    /**
     * @param string $leftOperand
     * @param string $rightOperand
     * @param string $expectation
     *
     * @dataProvider dataProviderForMultTesting
     */
    public function testMult(string $leftOperand, string $rightOperand, string $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->math->mult($leftOperand, $rightOperand)
        );
    }

    public function dataProviderForMultTesting(): array
    {
        return [
            'multiplying a natural number' => ['19', '2', '38'],
            'multiplying a negative number ' => ['-4', '2', '-8'],
            'multiplying a float number' => ['2.66', '2', '5.32'],
        ];
    }

    /**
     * @param string $leftOperand
     * @param string $rightOperand
     * @param string $expectation
     *
     * @dataProvider dataProviderForSubTesting
     */
    public function testSub(string $leftOperand, string $rightOperand, string $expectation)
    {
        $this->assertEquals(
            $expectation,
            $this->math->sub($leftOperand, $rightOperand)
        );
    }

    public function dataProviderForSubTesting(): array
    {
        return [
            'subtract from the natural number' => ['10', '2', '8'],
            'subtract from the negative number' => ['-1', '2', '-3'],
            'subtract from the float number' => ['1.5', '1.05', '0.45'],
        ];
    }


}
