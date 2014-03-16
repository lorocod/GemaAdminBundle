<?php

namespace Gema\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ComponentesControllerTest extends WebTestCase
{
    public function testElementos()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/elementos');
    }

    public function testValidacion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/validacion');
    }

    public function testJqueryui()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/jqueryUI');
    }

    public function testCharts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/charts');
    }

    public function testNotificaciones()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/notificaciones');
    }

}
