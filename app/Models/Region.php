<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class,'region_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
}
