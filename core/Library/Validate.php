<?php

namespace core\Library;

class Validate
{

    private array $errors;

    public function required(string $fieldName, string $message = 'Field Required')
    {
        $this->errors[$fieldName] = $message;
    }

    public function get_errors():array
    {
        return $this-> errors;
    }
}
