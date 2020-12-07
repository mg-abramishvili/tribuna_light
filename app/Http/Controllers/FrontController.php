<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Background;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $slides = Slide::with('backgrounds')->get();
        return view('welcome', compact('slides'));
    }
}
