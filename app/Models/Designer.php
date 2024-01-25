<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\DateFormat;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Auth\Passwords\CanResetPassword as CRPassword;
use Illuminate\Notifications\Notifiable;

class Designer extends Authenticatable
{
    use HasFactory, DateFormat, CRPassword, Notifiable;

    protected $fillable = [

        'name',
        'email',
        'phone',
        'address',
        'country',
        'about',
        'password',
        'image',
        'status',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'cover'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function skills()
    {
        return $this->belongsToMany(Skills::class, 'designerskills', 'designer_id', 'skill_id');
    }


    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }


    public function designs()
    {
        return $this->hasMany(Design::class);
    }
    
    public function payments()
    {
        return $this->hasManyThrough(Payment::class, Design::class);
    }


}
