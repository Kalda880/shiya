<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class SiteSettingGroup extends Model
{
    use HasFactory;

    /**
     * Get all of the comments for the SiteSettingGroup
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function settings(): HasMany
    {
        return $this->hasMany(SiteSetting::class, 'site_setting_group_id', 'id');
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
