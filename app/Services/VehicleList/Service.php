<?php

namespace App\Services\VehicleList;

use App\Http\Controllers\Controller;
use App\Models\VehicleBrand;

class Service extends Controller
{
    public function index()
    {
        $carBrands = VehicleBrand::all()->toArray();
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

        $url = $_SERVER['REQUEST_URI'];
        $urlArr = explode('/', $url);
        $currentPage = array_pop($urlArr);

        if (str_contains($currentPage, '-')) {
            $currentPage = ucwords(str_replace('-', ' ', $currentPage));
        }

        return (object) [
            'allCarBrands' => $carBrands,
            'randomCarBrands' => $randomCarBrands,
            'currentPage' => $currentPage,
            'url' => $url,
        ];
    }
}
