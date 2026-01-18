<?php

use app\Library\Checkout;
use core\Library\Email;
use core\Library\StripeApi;
use PHPUnit\Framework\TestCase;

class CheckoutTest extends TestCase
{
    public function testCheckout()
    {
        //arrange
        $checkout = new Checkout();
        // $stripeApi = $this->createStub(StripeApi::class);
        // $stripeApi->method('request')->willReturn(true);
        $stripeApi = $this->getMockBuilder(StripeApi::class)->getMock();
        $stripeApi->method('request')->willReturn(true);

        $email = $this->getMockBuilder(Email::class)->getMock();
        $email->expects($this->exactly(2))->method('send')->with('lucas@test.com');
        
        // $email = $this->createMock(Email::class);
        // $email->expects($this->once())->method('send')->with('lucas@test.com');
        //act
        /** @var StripeApi $stripeApi */
        /** @var Email $email */

        $response = $checkout->pay($stripeApi, $email);
        
        //assert
        // $this->assertTrue($response);
    }

}
