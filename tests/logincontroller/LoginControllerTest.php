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
        // retrieve the test user
        $testUser = $userRepository->findOneBy(['username' => 'Pierre']);
        // simulate $testUser being logged in
        $client->loginUser($testUser);
        $client->request('GET', '/article/new');
        $this->assertResponseIsSuccessful();
    }
}
