<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignsTags extends Model
{
    use HasFactory;

    protected $fillable = [
        'design_id',
        'tag_id',
    ];
}
