<?php

namespace Hr\TimeManagmentBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class AbsenceControllerTest
 *
 * @package Hr\TimeManagmentBundle\Tests\Controller
 */
class AbsenceControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/absence/list');

        $this->assertTrue($crawler->filter('html:contains("Test")')->count() > 0);
    }
}
