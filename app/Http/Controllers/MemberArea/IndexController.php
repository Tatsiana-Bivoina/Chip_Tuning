<?php

namespace App\Http\Controllers\MemberArea;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('memberArea.index');
    }
}
