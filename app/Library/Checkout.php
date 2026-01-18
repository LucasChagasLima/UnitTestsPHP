<?php

namespace app\Library;

use core\Library\StripeApi;
use core\Library\Email;

class Checkout
{
    public function pay(StripeApi $stripeApi, Email $email)
    {
        $stripeApi->request();

        $email->send('lucas@test.com');
        $email->send('lucas@test.com');

       
    }
}
