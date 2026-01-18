<?php

use core\Library\Auth;
use PharIo\Manifest\Author;
use PHPUnit\Framework\TestCase;
use core\Library\Validate;

class AuthTest extends TestCase
{
    public function testIfEmailNotFound()
    {
        //assing
        $auth = new Auth;

        //act
        $authenticated = $auth->Attempt('joao@email.com', '111');

        //assert
        $this->assertFalse($authenticated);


    }

     public function testIfPasswordNotMatch()
    {
        //assing
        $auth = new Auth;

        //act
        $authenticated = $auth->Attempt('Lucas@test.com', '123');

        //assert
        $this->assertFalse($authenticated);


    }

         public function testIfLoggedIn()
    {
        //assing
        $auth = new Auth;

        //act
        $authenticated = $auth->Attempt('Lucas@test.com','8fdsd7f');

        //assert
        $this->assertTrue($authenticated);
        $this->assertTrue(isset($_SESSION['auth']));
        $this->assertArrayHasKey('firstName', $_SESSION['auth']);


    }

}
