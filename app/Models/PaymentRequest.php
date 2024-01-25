<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class PaymentRequest extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the PaymentRequest
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(SiteUser::class, 'user_id', 'id');
    }
    public function getDocStatus()
    {
        switch ($this->doc_status) {
            case 'A':return trans('messages.payment_approved');
            case 'W':return trans('messages.payment_waiting');
            case 'D':return trans('messages.payment_declined');
            
            default:
            return $this->doc_status;
        }
    
    }
  
}
