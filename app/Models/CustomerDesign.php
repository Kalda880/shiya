<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDesign extends Model
{
    use HasFactory;

    protected $fillable = [
        'design_id',
        'customer_id',
    ];

    public function design()
    {
        return $this->belongsTo(Design::class);
    }
}
