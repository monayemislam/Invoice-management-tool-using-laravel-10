<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecurringInvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'total',
        'recurring_invoice_id',
    ];

    public function recurringInvoice()
    {
        return $this->belongsTo(RecurringInvoice::class);
    }
}
