<?php

namespace App\Http\Controllers\VehicleList;

class ShowController extends BaseController
{
    public function __invoke()
    {
        $randomCarBrands = $this->vehicleListService->index()->randomCarBrands;
        $url = $this->vehicleListService->index()->url;
        $carModels = $this->vehicleListService->show()->carModels;
        $carBrand = $this->vehicleListService->show()->carBrand;

        return view('vehicleList.show', compact('randomCarBrands', 'url', 'carBrand', 'carModels'));
    }
}
