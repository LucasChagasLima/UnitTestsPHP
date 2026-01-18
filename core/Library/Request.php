<?php

namespace core\Library;

class Request
{
    public function __construct(
        public readonly array $get,
        public readonly array $post,
        public readonly array $server,
    )   
    {
        
    }
    public static function create()
    {
        return new static($_GET, $_POST,$_SERVER);
    }

    public function current()
    {  
        $request = strtolower($this->server['REQUEST_METHOD']);


        if(!property_exists($this, $request))
            {
                throw new \Exception('Request does not exist');
            }


        return $this->$request;

    }

}
