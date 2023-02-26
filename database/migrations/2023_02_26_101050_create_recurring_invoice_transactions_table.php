<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurringInvoiceTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('recurring_invoice_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recurring_invoice_id')->constrained()->onDelete('cascade');
            $table->foreignId('payment_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recurring_invoice_transactions');
    }
}
