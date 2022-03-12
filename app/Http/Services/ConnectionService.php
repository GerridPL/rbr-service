<?php

namespace App\Http\Services;

class ConnectionService
{
    private $address = 'http://127.0.0.1:8001/api';

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }
}
