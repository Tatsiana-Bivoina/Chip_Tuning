<?php

namespace App\Http\Controllers\Contact;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $randomCarBrands = $this->carBrandService->index()->randomCarBrands;

        return view('contact.index', compact('randomCarBrands'));
    }
}
