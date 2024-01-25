<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class SiteUser extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guarded = [];
    
    public function scopeIsDesigner($query){
        return $query->where('is_designer' , 1);
    }

    public function scopeIsAffiliate($query){
        return $query->where('is_affiliate' , 1);
    }

    public function scopeIsCustomer($query){
        return $query->where('is_customer' , 1);
    }
/**affiliate */
    public function customers()
    {
       
        return $this->hasMany(self::class,'affiliate_id','id');
    }
    
    public function affiliate_payments()
    {
        return $this->hasMany(Payment::class,'affiliate_id','id');
    }
    /** designer */
    
    public function skills()
    {
        return $this->belongsToMany(Skills::class, 'designerskills', 'designer_id', 'skill_id');
    }


    public function coupons()
    {
        return $this->hasMany(Coupon::class,'designer_id','id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class,'designer_id','id');
    }


    public function designs()
    {
        return $this->hasMany(Design::class,'designer_id','id');
    }
    
    public function designer_payments()
    {
        return $this->hasManyThrough(Payment::class, Design::class,
        'designer_id', // Foreign key on the Design table...
        'design_id', // Foreign key on the Payment table...
        'id', // Local key on the users table...
        'id' // Local key on the SiteUser table...
    );
    }
    /** customer */
    public function customer_designs()
    {
        return $this->hasMany(CustomerDesign::class,'customer_id','id');
    }

}
