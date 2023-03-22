<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\EcuTuningFile;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $ecuTuningFiles = EcuTuningFile::all();

        return view('home.index', compact('ecuTuningFiles'));
    }
}
