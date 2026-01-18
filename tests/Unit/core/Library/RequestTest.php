<?php

namespace tests\unit\core\library;

use core\Library\Request;
use Exception;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function testGetMethodRequest()
    {
        //arrange = preparação, instaciação da classe
        $_GET['firstName'] = 'Lucas';
        $_GET['lastName'] = 'Lima';

        //act

       $request =  Request::create();
       

        //Assert
        $this->assertArrayHasKey('firstName', $request->get);
        $this->assertArrayHasKey('lastName', $request->get);


    }
    
    public function testPostMethodRequest()
    {
        //arrange = preparação, instaciação da classe
        $_POST['firstName'] = 'Lucas';
        $_POST['lastName'] = 'Lima';

        //act

       $request =  Request::create();
       

        //Assert
        $this->assertArrayHasKey('firstName', $request->post);
        $this->assertArrayHasKey('lastName', $request->post);


    }

    public function testGetsExceptionIfRequestMethodDoesNotExist()
    {
        //arrange = preparação, instaciação da classe
        $_GET['firstName'] = 'Lucas';
        $_GET['lastName'] = 'Lima';
        $_SERVER['REQUEST_METHOD'] = 'AHA';

     //act

       $request =  Request::create();


       //Assert
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Request does not exist');
        $this->assertArrayHasKey('lastName', $request->current());



    }

    public function testGetCurrentRequestMethod()
    {
        //arrange = preparação, instaciação da classe
        $_GET['firstName'] = 'Lucas';
        $_GET['lastName'] = 'Lima';
        $_SERVER['REQUEST_METHOD'] = 'GET';

     //act

       $request =  Request::create();


       //Assert
        
        $this->assertArrayHasKey('lastName', $request->current());



    }



}
