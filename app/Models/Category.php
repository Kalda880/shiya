<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Builder;
class Category extends Model
{
    use HasFactory;

    use HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'featured',
        'is_active',
        'cat_order'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->slugsShouldBeNoLongerThan(50)
            ->saveSlugsTo('slug');
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function designs()
    {
        return $this->hasMany(Design::class);
    }
    
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
    public function scopeActive($query)
    {
        $query->where('is_active', 1);
    }
    protected static function boot()
    {
        parent::boot();
    
        // Order by name ASC
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('cat_order', 'asc');
        });
    }
}
