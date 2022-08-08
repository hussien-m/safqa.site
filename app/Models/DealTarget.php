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
}
