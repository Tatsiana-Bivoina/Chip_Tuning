<?php

namespace App\Http\Controllers\Pricing;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $randomCarBrands = $this->carBrandService->index()->randomCarBrands;

        return view('pricing.index', compact('randomCarBrands'));
    }
}
