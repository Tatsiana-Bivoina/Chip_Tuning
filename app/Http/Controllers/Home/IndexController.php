<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Request $request)
    {
        $ecuTuningFiles = $this->service->index()->ecuTuningFiles;
        $randomCarBrands = $this->service->index()->randomCarBrands;

        return view('home.index', compact('ecuTuningFiles', 'randomCarBrands'));
    }
}
