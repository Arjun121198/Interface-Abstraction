<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FirstInterfaceService;
use App\Services\SecondInterfaceService;
use App\Services\EmailNotificationService;

class ImplementController extends Controller
{
    protected $firstInterfaceService;
    protected $secondInterfaceService;
    protected $emailNotificationService;

    public function __construct(FirstInterfaceService $firstInterfaceService, SecondInterfaceService $secondInterfaceService, EmailNotificationService $emailNotificationService)
    {
        $this->firstInterfaceService = $firstInterfaceService;
        $this->secondInterfaceService = $secondInterfaceService;
        $this->emailNotificationService = $emailNotificationService;
    }

    public function index()
    {
        $firstInterface = $this->firstInterfaceService->implement();

        $secondInterface = $this->secondInterfaceService->implement();

        echo 'First Interface: ' . $firstInterface . '<br>';
        echo 'Second Interface: ' . $secondInterface . '<br>';
    }

    public function sendNotification()
    {
        $this->emailNotificationService->charge(100);
    }
}
