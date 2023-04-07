<?php

namespace App\Http\Controllers\VehicleList;

class ShowController extends BaseController
{
    public function __invoke()
    {
        $randomCarBrands = $this->vehicleListService->index()->randomCarBrands;
        $url = $this->vehicleListService->index()->url;
        $currentPage = $this->vehicleListService->show()->currentPage;
        $carModels = $this->vehicleListService->show()->carModels;
        $carBrand = $this->vehicleListService->show()->carBrand;

        return view('vehicleList.show', compact('randomCarBrands', 'currentPage', 'url', 'carBrand', 'carModels'));
    }
}
