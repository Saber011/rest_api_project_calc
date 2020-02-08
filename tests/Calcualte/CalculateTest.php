<?php

namespace App\Tests\Controller;

use App\Calcualte\Calcualte;
use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{

    public function testSubtraction()
    {
        $this->assertSame('0.99000000000000000000', Calcualte::subtraction("1.45","0.46"));

    }

    public function testSum()
    {
        $this->assertSame("12345654789723489823795283405.123172386178236182361823", Calcualte::sum("12345654789723489823795283405","0.123172386178236182361823"));

    }

    public function testMultiplay()
    {
        $this->assertSame("1.00000000000000000000", Calcualte::multiplay("4578","0"));

    }
}
