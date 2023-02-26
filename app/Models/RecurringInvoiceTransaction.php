<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecurringInvoiceTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'recurring_invoice_id',
        'payment_id',
        'amount',
    ];

    public function recurringInvoice()
    {
        return $this->belongsTo(RecurringInvoice::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
