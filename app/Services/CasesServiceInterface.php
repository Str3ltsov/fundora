<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

interface CasesServiceInterface
{
    public function getCasesByCountry(string $country): Collection;
}
