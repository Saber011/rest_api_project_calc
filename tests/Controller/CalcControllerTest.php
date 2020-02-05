<?php

namespace App\Tests\Controller;

use App\Controller\CalcController;
use http\Message\Body;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalcControllerTest extends WebTestCase
{
    protected static function getKernelClass()
    {
        return \App\Kernel::class;
    }

    public function testGetSum()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/api/sum');

        $this->assertTrue(
            $client->getResponse()->headers->contains(
                'Content-Type',
                'application/json'
            ),
            'the "Content-Type" header is "application/json"' // optional message shown on failure
        );

    }


    public function testGetSub()
    {
        $this->assertSame(true,true);
    }
}
