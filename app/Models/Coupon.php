<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'times',
        'amount',
        'designer_id',
    ];

    public function designer()
    {
        return $this->belongsTo(SiteUser::class,'designer_id','id');
    }
}
