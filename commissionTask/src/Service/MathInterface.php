<?php

declare(strict_types=1);

namespace Paysera\CommissionTask\Service;

interface MathInterface
{
    public function add(string $leftOperand, string $rightOperand): string;

    public function div(string $dividend, string $divisor): string;

    public function mult(string $left_opr, string $right_opr): string;

    public function sub(string $left_opr, string $right_opr): string;
}
