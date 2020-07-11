<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Service;

/**
 * Class Math.
 */
class Math implements MathInterface
{
    /**
     * @var int
     */
    private $scale;

    public function __construct(int $scale = 10)
    {
        $this->scale = $scale;
    }

    public function add(string $leftOperand, string $rightOperand): string
    {
        return bcadd($leftOperand, $rightOperand, $this->scale);
    }

    public function div(string $dividend, string $divisor): string
    {
        return bcdiv($dividend, $divisor, $this->scale);
    }

    public function mult(string $left_opr, string $right_opr): string
    {
        return bcmul($left_opr, $right_opr, $this->scale);
    }

    public function sub(string $left_opr, string $right_opr): string
    {
        // TODO: Implement sub() method.
        return bcsub($left_opr, $right_opr, $this->scale);
    }
}
