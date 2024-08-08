<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class EmailNotificationService extends NotificationService
{
    public function charge($amount)
    {
        $this->logInfo($amount);
        $this->logTransaction(['amount' => $amount]);
    }
}
