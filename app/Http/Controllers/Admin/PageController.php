<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use App\Services\PageService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{
    public function __construct(private PageService $pageService) {}


    public function index(): View
    {
        return view('admin.pages.index')
            ->with('pages', Page::all());
    }

    public function edit(Page $page): View
    {
        return view('admin.pages.edit')
            ->with('page', Page::findOrFail($page->id));
    }

    public function update(UpdatePageRequest $request, Page $page): RedirectResponse
    {
        try {
            $validatedInput = $request->validated();
            $pageTranslations = $page->translations()->get();

            $this->pageService->updatePageTranslations($pageTranslations, $validatedInput);
            $page->update(['updated_at' => now()]);

            return redirect(route('pages.index'))
                ->with('success', __('messages.successPageUpdate') . " '$page->name'.");
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
