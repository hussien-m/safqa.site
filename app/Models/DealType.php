<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealType extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function targets()
    {
        return $this->hasMany(DealTarget::class,'deal_type_id','id');
    }

}
