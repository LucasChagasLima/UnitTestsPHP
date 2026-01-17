<?php

use core\Library\Validate;
use PHPUnit\Framework\TestCase;

class ValidateTest extends TestCase
{

    public function testRequiredValidate()
    {
        //Arrange = instancia da classe
        $validate = new Validate;

        //Act = Execução de um metodo. è a ação, o comportamento;

        $validate->required('firstName', 'FirstName Required');
        $validate->required('lastName', 'LastName Required');


        //Assert =

        $this->assertArrayHasKey('firstName', $validate->get_errors());
        $this->assertArrayHasKey('lastName', $validate->get_errors());


    }
    
}
