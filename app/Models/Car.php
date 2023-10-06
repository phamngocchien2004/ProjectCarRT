<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = "cars";

    protected $fillable = [
        "name",
        "slug",
        "price",
        "thumbnail",
        "description",
        "qty",
        "category_id",
        "seat",
        "fuel_style",
        "car_year",
        "mileage",
        "color"
    ];
}
