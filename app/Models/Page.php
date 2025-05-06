<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Page extends Model
{
    /** @use HasFactory<\Database\Factories\PageFactory> */
    use HasFactory;

    protected $fillable = [
        "uri",
        "alias"
    ];

    protected $casts = [
        "uri" => "string",
        "alias" => "string"
    ];

    protected $with = ["defaultTranslation"];

    public function getNameAttribute(): string|null
    {
        return $this->defaultTranslation?->name;
    }

    public function getDescriptionAttribute(): string|null
    {
        return $this->defaultTranslation?->description;
    }

    public function translations(): HasMany
    {
        return $this->hasMany(PageTranslation::class);
    }

    public function defaultTranslation(): HasOne
    {
        return $this->hasOne(PageTranslation::class)->where(
            "locale",
            app()->getLocale()
        );
    }
}
