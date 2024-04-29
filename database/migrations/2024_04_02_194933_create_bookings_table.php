<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->integer('customer_id');
            $table->integer('booking_total');
            $table->integer('tax_total');
            $table->integer('shipping_total');
            $table->text('booking_date');
            $table->text('booking_timestamp');
            $table->string('booking_status')->default('Pending');
            $table->text('delivery_address');
            $table->string('delivery_status')->default('Pending');
            $table->text('payment_method');
            $table->string('payment_status')->default('Pending');
            $table->string('payment_amount')->default(0);
            $table->string('currency')->default('BDT');
            $table->string('transaction_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
