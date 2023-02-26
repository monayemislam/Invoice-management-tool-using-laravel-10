<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurringInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('recurring_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->foreignId('currency_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('frequency');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->decimal('total_amount', 10, 2)->default(0);
            $table->string('status')->default('draft');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recurring_invoices');
    }
}
