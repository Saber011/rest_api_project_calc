<?php


namespace App\Calcualte;


class Calculate
{
    public static function multiply($array)
    {
        return bcpow($array['firstValue'], $array['secondValue'], 20);
    }
    public static function subtraction($array)
    {
        return bcsub($array['firstValue'], $array['secondValue'], 20);
    }
    public static function sum($array)
    {
        return bcadd($array['firstValue'], $array['secondValue'], 24);
    }

}