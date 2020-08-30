<?php

namespace Tests\Unit;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testStoreUser()
    {
        $users = new User();
        $this->assertTrue($users->store());
    }
    public function testAuthenticateUser()
    {
        $users = new User();
        $this->assertTrue($users->authenticate());
    }
    public function testLogoutUser()
    {
        $users = new User();
        $this->assertTrue($users->logout());
    }
}