<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(): View
    {
        return view('about_us.index');
    }
}
