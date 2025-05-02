<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCountry;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    public function index(): View
    {
        return view('cases.index')
            ->with([
                'cases' => Product::paginate(5),
                'countries' => ProductCountry::all()
            ]);
    }
}
