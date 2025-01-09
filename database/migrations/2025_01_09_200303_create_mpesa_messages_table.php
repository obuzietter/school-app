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
        Schema::create('mpesa_messages', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->text('body');
            $table->string('transaction_code')->unique(); // New field for transaction code
            $table->decimal('amount', 8, 2)->nullable();   // New field for amount (with two decimal places)
            $table->string('customer_name')->nullable();   // New field for customer name
            $table->string('customer_number', 15)->nullable(); // New field for customer phone number
            $table->boolean('voucher_status')->default(false);
            $table->timestamp('date');                     // Existing field for date
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mpesa_messages');
    }
};
