<?php

namespace App\Services\VehicleList;

use App\Http\Controllers\Controller;
use App\Models\VehicleBrand;
use App\Models\VehicleModel;

class Service extends Controller
{
    public function index()
    {
        $carBrands = VehicleBrand::all()->toArray();
        if (count($carBrands) !== 0) {
            usort($carBrands, function ($a, $b) {
                if ($a['brand_name'] == $b['brand_name']) {
                    return 0;
                }

                return ($a['brand_name'] < $b['brand_name']) ? -1 : 1;
            });
        }

        $rand_keys = array_rand($carBrands, 20);
        $randomCarBrands = [];

        for ($x = 0; $x < count($rand_keys); ++$x) {
            for ($y = 0; $y < count($carBrands); ++$y) {
                if ($rand_keys[$x] == $y) {
                    $randomCarBrands[] = $carBrands[$y];
                    break;
                }
            }
        }
        if (count($randomCarBrands) !== 0) {
            usort($randomCarBrands, function ($a, $b) {
                if ($a['brand_name'] == $b['brand_name']) {
                    return 0;
                }

                return ($a['brand_name'] < $b['brand_name']) ? -1 : 1;
            });
        }

        $url = $_SERVER['REQUEST_URI'];

        return (object) [
            'allCarBrands' => $carBrands,
            'randomCarBrands' => $randomCarBrands,
            'url' => $url,
        ];
    }

    public function show()
    {
        $url = $_SERVER['REQUEST_URI'];
        $urlArr = explode('/', $url);
        $currentPage = array_pop($urlArr);

        $carBrand = VehicleBrand::where('brand_route', $currentPage)->first();

        $carModels = $carBrand->vehicleModel->toArray();
        if (count($carModels) !== 0) {
            usort($carModels, function ($a, $b) {
                if ($a['model_name'] == $b['model_name']) {
                    return 0;
                }

                return ($a['model_name'] < $b['model_name']) ? -1 : 1;
            });
        }

        return (object) [
            'carBrand' => $carBrand,
            'carModels' => $carBrand->vehicleModel,
        ];
    }

    public function modelShow()
    {
        $url = $_SERVER['REQUEST_URI'];
        $urlArr = explode('/', $url);

        $currentPage = array_pop($urlArr);

        $carModel = VehicleModel::where('model_route', $currentPage)->first();

        return (object) [
            'carModel' => $carModel,
            'carBrand' => $carModel->vehicleBrand,
            'carEngine' => $carModel->vehicleEngine,
        ];
    }
}
