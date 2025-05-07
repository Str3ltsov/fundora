<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

interface PageServiceInterface
{
    public function updatePageTranslations(Collection $pageTranslations, array $validatedInput): void;
}
