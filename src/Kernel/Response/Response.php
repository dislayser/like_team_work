<?php

namespace App\Kernel\Response;

class Response implements ResponseInterface{
    public int $code = 200;
    

    public function getStatusCode(): int
    {
        return $this->code;
    }

    public function do() : void
    {

    }
}