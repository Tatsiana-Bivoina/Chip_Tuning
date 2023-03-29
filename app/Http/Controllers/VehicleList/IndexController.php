<?php

namespace App\Http\Controllers\VehicleList;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $carBrands = $this->vehicleListService->index()->allCarBrands;
        $randomCarBrands = $this->vehicleListService->index()->randomCarBrands;
        $url = $this->vehicleListService->index()->url;

        return view('vehicleList.index', compact('randomCarBrands', 'carBrands', 'url'));
    }
}
