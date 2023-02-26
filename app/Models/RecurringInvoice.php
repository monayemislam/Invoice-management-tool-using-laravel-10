<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecurringInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'currency_id',
        'name',
        'description',
        'frequency',
        'start_date',
        'end_date',
        'total_amount',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function items()
    {
        return $this->hasMany(RecurringInvoiceItem::class);
    }

    public function transactions()
    {
        return $this->hasMany(RecurringInvoiceTransaction::class);
    }
}
