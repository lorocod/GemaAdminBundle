<?php

namespace Gema\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PaginasControllerTest extends WebTestCase
{
    public function testPlanes()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/planes');
    }

    public function testFaq()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/faq');
    }

    public function testGaleria()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/galeria');
    }

    public function testReportes()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/reportes');
    }

    public function testCuentausuario()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cuentausuario');
    }

}
