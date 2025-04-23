<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConsultationRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookConsultationController extends Controller
{
    public function index(): View
    {
        return view('book_consulation.index');
    }

    public function store(StoreConsultationRequest $request): RedirectResponse
    {
        return back();
    }
}
