<?php

namespace Hr\EmployeeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class EmployeeControllerTest
 *
 * @package Hr\EmployeeBundle\Tests\Controller
 */
class EmployeeControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/employee/add');

        $this->assertTrue($crawler->filter('html:contains("Test22")')->count() > 0);
    }
}
