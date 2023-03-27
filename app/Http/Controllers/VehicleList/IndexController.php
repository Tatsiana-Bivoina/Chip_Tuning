<?php

namespace App\Http\Controllers\VehicleList;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $carBrands = $this->carBrandService->index()->allCarBrands;
        $randomCarBrands = $this->carBrandService->index()->randomCarBrands;

        return view('vehicleList.index', compact('randomCarBrands'));
    }
}
