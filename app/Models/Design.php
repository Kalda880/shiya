<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function elements()
    {
        return $this->hasMany(DesignElement::class, 'designs_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'designs_tags', 'designs_id', 'tags_id');
    }

    public function designer()
    {
        return $this->belongsTo(SiteUser::class,'designer_id','id');
    }


    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }



}
