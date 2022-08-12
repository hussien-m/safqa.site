<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealTarget extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(DealType::class,'deal_type_id','id');
    }

    public function deals()
    {
        return $this->hasMany(Deals::class,'deal_target_id');
    }
}
