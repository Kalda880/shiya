<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class SiteSetting extends Model
{
    use HasFactory;

   public static function getValue($name){

    $row = self::where('name',$name)->first();
    return $row?$row->value : null;
   }

   public static function hasKey($name){

    return self::where('name',$name)->first();
   }

   public function scopeActive($query,$value=true)
    {
        return $query->where('is_active', $value?'Y':'N');
    }

    protected static function boot()
    {
        parent::boot();
    
        // Order by name ASC
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('seqno', 'asc');
        });
    }
}
