<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(SiteUser::class,'customer_id','id');
    }

    public function design()
    {
        return $this->belongsTo(Design::class);
    }
}
