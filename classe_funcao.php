<?php

class Calculadora
{
    static public function Soma($a, $b)
    {
        return $a + $b;
    }
}


echo Calculadora::Soma(1,2);