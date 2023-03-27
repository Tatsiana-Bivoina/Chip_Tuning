<?php

namespace App\Http\Controllers\ChiptuningService;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $randomCarBrands = $this->carBrandService->index()->randomCarBrands;

        return view('chiptuningService.index', compact('randomCarBrands'));
    }
}
