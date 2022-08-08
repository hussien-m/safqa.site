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
}
