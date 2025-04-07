<?php

namespace App\Controller;

use App\Kernel\Response\ResponseInterface;

interface ControllerInterface{
    public function index() : ResponseInterface;
}