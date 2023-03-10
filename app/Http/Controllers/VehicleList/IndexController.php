<?php

namespace App\Http\Controllers\VehicleList;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('vehicleList.index');
    }
}
