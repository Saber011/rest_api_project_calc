<?php

namespace App\Tests\Controller;

use App\Calcualte\Calculate;
use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{

    public function testSubtraction()
    {
        $this->assertSame('0.99000000000000000000', Calculate::subtraction("1.45", "0.46"));
    }

    public function testSum()
    {
        $this->assertSame("12345654789723489823795283405.123172386178236182361823", Calculate::sum("12345654789723489823795283405", "0.123172386178236182361823"));
    }

    public function testMultiply()
    {
        $this->assertSame("1.00000000000000000000", Calculate::multiply("4578", "0"));
    }
}
