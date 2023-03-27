<?php

namespace App\Http\Controllers\Pricing;

use App\Http\Controllers\Controller;
use App\Services\CarBrand\Service;

class BaseController extends Controller
{
    public $carBrandService;

    public function __construct(Service $service)
    {
        $this->carBrandService = $service;
    }
}