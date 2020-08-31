<?php

namespace App\Tests;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testlogin()
    {
        $client = static::createClient();
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneBy(['username' => 'Pierre']);
        $client->loginUser($testUser);
        $client->request('GET', '/article/new');
        $this->assertResponseIsSuccessful();
    }
}
