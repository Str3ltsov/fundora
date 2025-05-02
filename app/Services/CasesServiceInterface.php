<?php

namespace App\Services;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface CasesServiceInterface
{
    public function getCasesByCountry(string $country): Collection;
    public function getPaginatedCases(Collection $products, int $perPage): LengthAwarePaginator;
}
