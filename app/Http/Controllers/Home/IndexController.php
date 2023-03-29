<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Request $request)
    {
        $ecuTuningFiles = $this->service->index()->ecuTuningFiles;
        $randomCarBrands = $this->service->index()->randomCarBrands;
        $url = $this->service->index()->url;

        return view('home.index', compact('ecuTuningFiles', 'randomCarBrands', 'url'));
    }
}
