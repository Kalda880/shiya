<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

    protected $fillable = [
        'name',
        'category_id'
    ];
    
    protected $table = "subcategories";
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function designs()
    {
        return $this->hasMany(Design::class);
    }


}
