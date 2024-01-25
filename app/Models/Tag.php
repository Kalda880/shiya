<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function designs()
    {
        return $this->belongsToMany(Design::class, 'designs_tags', 'tags_id', 'designs_id');
    }
}
