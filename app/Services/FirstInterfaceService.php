<?php

namespace App\Services;

use App\Interfaces\ImplementInterface;

class FirstInterfaceService implements ImplementInterface
{
    public function implement()
    {

        return 'First Interface Service';
    }
}
