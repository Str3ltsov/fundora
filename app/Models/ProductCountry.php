<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductCountry extends Model
{
    protected $fillable = [];

    protected $casts = [];

    protected $with = [
        "defaultTranslation"
    ];

    public $timestamps = false;

    public function name(): Attribute
    {
        return new Attribute(
            get: fn() => $this->defaultTranslation->title
        );
    }

    public function translations(): HasMany
    {
        return $this->hasMany(ProductCountryTranslation::class);
    }

    public function defaultTranslation(): HasOne
    {
        return $this->translations()->one()->where(
            'locale',
            app()->getLocale()
        );
    }

    public function products(): HasMany
    {
        return $this->hasMany(
            Product::class,
            "country_id",
            "id"
        );
    }
}
