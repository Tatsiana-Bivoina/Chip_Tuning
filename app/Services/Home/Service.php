<?php

namespace App\Services\Home;

use App\Http\Controllers\Controller;
use App\Models\EcuTuningFile;
use App\Models\VehicleBrand;

class Service extends Controller
{
    public function index()
    {
        $ecuTuningFiles = EcuTuningFile::all();

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

        return (object) [
            'ecuTuningFiles' => $ecuTuningFiles,
            'randomCarBrands' => $randomCarBrands,
            'url' => $url,
        ];
    }
}
