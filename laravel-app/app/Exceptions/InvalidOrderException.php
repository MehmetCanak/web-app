<?php

namespace App\Exceptions;

use Exception;

class InvalidOrderException extends Exception
{
    public function context()
    {
        return ['order_id' => $this->orderId];
    }
}
