<?php


use App\Testingclass\User;
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
    public function test_GetID(){
        $user = new User(2, 'lsong', '1234', 'Lei', 'Song');
        $this->assertEquals(2, $user->getId());

    }

    public function test_GetUsername(){
        $user = new User(2, 'lsong', '1234', 'Lei', 'Song');
        $this->assertEquals('lsong', $user->getUsername());

    }

    public function test_GetPassword(){
        $user = new User(2, 'lsong', '1234', 'Lei', 'Song');
        $this->assertEquals('1234', $user->getPassword());

    }

    public function test_GetFirstname(){
        $user = new User(2, 'lsong', '1234', 'Lei', 'Song');
        $this->assertEquals('Lei', $user->getFirstname());

    }

    public function test_GetLastname(){
        $user = new User(2, 'lsong', '1234', 'Lei', 'Song');
        $this->assertEquals('Song', $user->getLastname());

    }

    public function testGetFullname(){
        $user = new User(2, 'lsong', '1234', 'Lei', 'Song');
        $this->assertEquals('Lei Song', $user->getFullName());

    }
}
