<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCountry extends Model
{
    protected $table = "product_countries";

    protected $fillable = ["name"];

    protected $casts = ["name" => "string"];

    public $timestamps = false;

    public function products(): HasMany
    {
        return $this->hasMany(
            Product::class,
            "country_id",
            "id"
        );
    }
}
