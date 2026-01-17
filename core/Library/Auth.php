<?php

namespace core\Library;

use PharIo\Manifest\Email;
use stdClass;

class Auth
{
    public function Attempt(string $email, string $password)
    {
        //Verificar se o email existe no banco de dados

        if($email !== "Lucas@test.com"){
            return false;
        }
        $user = new stdClass;
        $user->firstName = 'Lucas';
        $user->lastName = 'Lima';
        $user->email =  'Lucas@test.com';
        $user->password =  password_hash('8fdsd7f', PASSWORD_DEFAULT);

        //Verificar se a senha é forte

        if(!password_verify($password, $user->password))
        {
            return false;
        }

        //criar a sessão de auth
        $_SESSION['auth'] = (array)$user;

        return true;
    }

}
