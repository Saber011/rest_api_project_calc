<?php


namespace App\Calcualte;


class Calculate
{
    public static function multiply($firstValue, $secondValue)
    {
        return bcpow($firstValue, $secondValue, 20);
    }
    public static function subtraction($firstValue, $secondValue)
    {
        return bcsub($firstValue, $secondValue, 20);
    }
    public static function sum($firstValue, $secondValue)
    {
        return bcadd($firstValue, $secondValue, 24);
    }

}