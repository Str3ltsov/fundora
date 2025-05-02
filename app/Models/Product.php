<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        "address",
        "image",
        "is_visible",
        "country_id"
    ];

    protected $casts = [
        "address" => "string",
        "image" => 'string',
        "is_visible" => "boolean",
        "country_id" => "integer"
    ];

    protected $with = [
        "defaultTranslation"
    ];

    private function newDefaultTranslationAttribute(string $attribute): Attribute
    {
        return new Attribute(get: fn() => $attribute);
    }

    public function name(): Attribute
    {
        return $this->newDefaultTranslationAttribute(
            $this->defaultTranslation->title
        );
    }

    public function description(): Attribute
    {
        return $this->newDefaultTranslationAttribute(
            $this->defaultTranslation->description
        );
    }

    public function price(): Attribute
    {
        return $this->newDefaultTranslationAttribute(
            $this->defaultTranslation->price
        );
    }

    public function mainAdvantages(): Attribute
    {
        return $this->newDefaultTranslationAttribute(
            $this->defaultTranslation->main_advantages
        );
    }

    public function translations(): HasMany
    {
        return $this->hasMany(ProductTranslation::class);
    }

    public function defaultTranslation(): HasOne
    {
        return $this->translations()->one()->where(
            'locale',
            app()->getLocale()
        );
    }

    public function country(): HasOne
    {
        return $this->hasOne(
            ProductCountry::class,
            'id',
            'country_id'
        );
    }
}
