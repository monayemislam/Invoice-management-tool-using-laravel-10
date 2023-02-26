<?php

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'invoice_id', 'amount', 'payment_method', 'transaction_reference'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
