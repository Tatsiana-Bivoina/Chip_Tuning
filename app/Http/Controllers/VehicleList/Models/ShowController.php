<?php

namespace App\Http\Controllers\VehicleList\Models;

use App\Http\Controllers\VehicleList\BaseController;

class ShowController extends BaseController
{
    public function __invoke()
    {
        $randomCarBrands = $this->vehicleListService->index()->randomCarBrands;
        $url = $this->vehicleListService->index()->url;
        $carModel = $this->vehicleListService->modelShow()->carModel;
        $carBrand = $this->vehicleListService->modelShow()->carBrand;
        $carEngine = $this->vehicleListService->modelShow()->carEngine;

        return view('vehicleList.models.show', compact('randomCarBrands', 'carBrand', 'url', 'carModel', 'carEngine'));
    }
}
