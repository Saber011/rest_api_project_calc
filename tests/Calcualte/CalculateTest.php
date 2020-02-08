<?php

namespace App\Tests\Controller;

use App\Calcualte\Calculate;
use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{

    public function testSubtraction()
    {
        $array = [
            "firstValue" => "1.45",
            "secondValue" => "0.46",
        ];
        $this->assertSame('0.99000000000000000000', Calculate::subtraction($array));
    }

    public function testSum()
    {
        $array = [
            "firstValue" => "12345654789723489823795283405",
            "secondValue" => "0.123172386178236182361823",
        ];
        $this->assertSame("12345654789723489823795283405.123172386178236182361823", Calculate::sum($array));
    }

    public function testMultiply()
    {
        $array = [
            "firstValue" => "4578",
            "secondValue" => "0",
        ];
        $this->assertSame("1.00000000000000000000", Calculate::multiply($array));
    }
}
