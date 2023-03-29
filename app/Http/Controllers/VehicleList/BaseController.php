<?php

namespace App\Http\Controllers\VehicleList;

use App\Http\Controllers\Controller;
use App\Services\VehicleList\Service;

class BaseController extends Controller
{
    public $vehicleListService;

    public function __construct(Service $service)
    {
        $this->vehicleListService = $service;
    }
}
