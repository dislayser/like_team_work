<?php

namespace App\Kernel\Utils;

class Json{
    public static function encode($data): bool|string
    {
        return json_encode($data);
    }
    public static function decode($data): bool|string
    {
        return json_decode($data, true);
    }
    public static function isJson($data): bool
    {
        return true;
    }
}