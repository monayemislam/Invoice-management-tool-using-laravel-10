<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'symbol',
    ];

    /**
     * Get the invoices that belong to this currency.
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
