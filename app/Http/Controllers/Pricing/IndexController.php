<?php

namespace App\Http\Controllers\Pricing;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('pricing.index');
    }
}
