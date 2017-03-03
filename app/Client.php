<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'code',
        'name',
        'function',
        'mealPreFridayBreakfast',
        'mealPreFridayLunch',
        'mealPreFridayDiner',
        'mealPreSaturdayBreakfast',
        'mealPreSaturdayLunch',
        'mealPreSaturdayDiner'
    ];
}