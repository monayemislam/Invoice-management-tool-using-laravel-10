<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurringInvoiceItemsTable extends Migration
{
    public function up()
    {
        Schema::create('recurring_invoice_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('quantity')->unsigned();
            $table->decimal('price', 13, 2);
            $table->decimal('total', 13, 2);
            $table->foreignId('recurring_invoice_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recurring_invoice_items');
    }
}
