<?php

namespace App\Kernel\Response;

interface ResponseInterface{
    public function getStatusCode(): int;
    public function do() : void;
}