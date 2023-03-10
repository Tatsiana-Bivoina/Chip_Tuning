<?php

namespace App\Http\Controllers\ChiptuningService;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('chiptuningService.index');
    }
}
