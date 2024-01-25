<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'designer_id',
        'status',
        'reply',
    ];

    public function designer()
    {
        return $this->belongsTo(SiteUser::class,'designer_id','id');
    }


}
