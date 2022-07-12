<?php

class Calculadora
{
    static public function Sum($a, $b)
    {
        return $a + $b;
    }

    static public function Sub($a, $b)
    {
        return $a - $b;
    }

    static public function Mult($a, $b)
    {
        return $a * $b;
    }

    static public function Div($a, $b)
    {
        return $a / $b;
    }
}


echo Calculadora::Div(0,4);