<?php

namespace App\Services;

use App\Interfaces\ImplementInterface;

class SecondInterfaceService implements ImplementInterface
{
    public function implement()
    {
        return 'Second Interface Service';
    }
}
