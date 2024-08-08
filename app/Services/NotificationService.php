<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

abstract class NotificationService
{
    abstract public function charge($amount);

    public function logTransaction($transactionDetails)
    {
        $this->log($transactionDetails);

        echo "Transaction Details: " . json_encode($transactionDetails);
    }

    private function log($transactionDetails)
    {
        Log::info('private', $transactionDetails);
    }
    protected function logInfo($transactionDetails)
    {
        Log::info('protected', $transactionDetails);
    }
}
