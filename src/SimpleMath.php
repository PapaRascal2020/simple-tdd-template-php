<?php

namespace App;

class SimpleMath
{
    public function add($a, $b): float|int
    {
        return $a + $b;
    }

    public function multiply($a, $b): float|int
    {
        return $a * $b;
    }

    public function divide($a, $b): float|int
    {
        return $a / $b;
    }

    public function subtract($a, $b): float|int
    {
        return $a - $b;
    }

    public function power($a, $b): float|int
    {
        return $a ** $b;
    }
}