<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(SiteUser::class,'customer_id','id');
    }

    public function elements()
    {
        return $this->hasMany(Projectelement::class);
    }
}
