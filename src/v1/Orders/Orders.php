<?php

namespace V1\Orders;

use Fapi\Component\Framework\Controller\Controller;

class Orders extends Controller
{
    public function readRequest()
    {
        var_dump($this->validator);

        echo "Hello";
    }
}
