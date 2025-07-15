<?php

namespace App\Http\Controllers;

use App\Services\PageService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function __construct(private PageService $pageService) {}

    public function index(): View
    {
        $page = $this->pageService->getPageByUri(request()->path());

        return view('privacy_policy.index')
            ->with('page', $page);
    }
}
