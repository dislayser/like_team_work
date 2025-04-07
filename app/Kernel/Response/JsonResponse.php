<?php

namespace App\Kernel\Response;

use App\Kernel\Utils\Json;

class JsonResponse extends Response{
    public array $data = [];
    public function __construct(array $data = [], int $status = 200, array $headers = []){

    }

    public function __toString(): string
    {
        return Json::encode($this->data);
    }
}