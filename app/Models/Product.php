<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        "name",
        "address",
        "image",
        "description",
        "price",
        "main_advantages",
        "is_visible",
        "country_id"
    ];

    protected $casts = [
        "name" => "string",
        "address" => "string",
        "image" => 'string',
        "description" => "string",
        "price" => "string",
        "main_advantages" => "string",
        "is_visible" => "boolean",
        "country_id" => "integer"
    ];

    public function country(): HasOne
    {
        return $this->hasOne(
            ProductCountry::class,
            'id',
            'country_id'
        );
    }
}
