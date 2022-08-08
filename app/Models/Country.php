<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function users()
    {
        return $this->hasMany(User::class,'country_id');
    }

    public function cities()
    {
        return $this->hasMany(City::class,'country_id');
    }

    public function region()
    {
        return $this->hasMany(Region::class,'country_id');
    }

}
