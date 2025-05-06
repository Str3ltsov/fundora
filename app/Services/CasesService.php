<?php

namespace App\Services;

use App\Models\ProductCountry;
use Illuminate\Database\Eloquent\Collection;

class CasesService implements CasesServiceInterface
{
    public function getCasesByCountry(string $country): Collection
    {
        return ProductCountry::join(
            'product_country_translations',
            'product_country_translations.product_country_id',
            'product_countries.id'
        )
            ->where(
                'product_country_translations.name',
                'LIKE',
                "%{$country}%"
            )
            ->first()
            ->products;
    }
}
