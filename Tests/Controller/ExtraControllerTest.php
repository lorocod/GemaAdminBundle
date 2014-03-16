<?php

namespace Gema\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ExtraControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
    }

    public function testRegistro()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/registro');
    }

    public function testError()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/error');
    }

}
