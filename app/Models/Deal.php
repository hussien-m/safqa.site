<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(DealType::class,'deal_type_id','id');
    }

    public function target()
    {
        return $this->belongsTo(DealTarget::class,'deal_target_id','id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }

    public function city()
    {
        return $this->belongsTo(City::class,'city_id','id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class,'region_id','id');
    }
}
