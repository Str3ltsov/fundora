<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConsultationRequest;
use App\Models\Consultation;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class BookConsultationController extends Controller
{
    public function index(): View
    {
        return view('book_consulation.index');
    }

    public function store(StoreConsultationRequest $request): RedirectResponse
    {
        try {
            $consultationInput = $request->validated();
            Consultation::firstOrCreate($consultationInput);

            return redirect(route('book-consultation.index'))
                ->with('success', __('Successfully submitted your consultation.'));
        } catch (\Exception $e) {
            return back()
                ->with('error', $e->getMessage());
        }
    }
}
