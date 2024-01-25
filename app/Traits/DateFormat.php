<?php

namespace App\Traits;

trait DateFormat
{
    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y H:m', strtotime($value));
    }


    public function getImageAttribute($value)
    {
        if(!is_null($value)){

            return asset('images/' . $value);

        }else{

            return asset('images/default.png');
        }
    }

    public function getCoverAttribute($value)
    {
        if(!is_null($value)){

            return asset('images/' . $value);

        }else{

            return asset('images/cover2.jpg');
        }
    }
}
