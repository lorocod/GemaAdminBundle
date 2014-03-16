<?php

namespace Gema\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BarraControllerTest extends WebTestCase
{
    public function testNavbar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/navbar');
    }

    public function testSubnavbar()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/subnavbar');
    }

}
