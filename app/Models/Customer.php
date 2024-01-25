<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'email_verified_at',
        'password',
        'country',
        'status',
        'remember_token',
        'affiliate_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function designs()
    {
        return $this->hasMany(CustomerDesign::class);
    }



}
