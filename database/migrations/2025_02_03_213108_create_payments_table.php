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
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary(); // Unique ID from API
            
            // Invoice details
            $table->string('invoice_id')->unique();
            $table->string('state'); // PENDING, COMPLETE, FAILED
            $table->string('provider'); // M-PESA, Card, etc.
            $table->decimal('charges', 10, 2)->default(0);
            $table->decimal('net_amount', 10, 2);
            $table->string('currency', 3)->default('KES');
            $table->decimal('value', 10, 2);
            $table->string('account'); // Customer phone number or account
            $table->string('api_ref')->nullable(); // API request reference
            $table->string('mpesa_reference')->nullable();
            $table->text('failed_reason')->nullable();
            $table->string('failed_code')->nullable();
            
            // Customer details
            $table->string('customer_id');
            $table->string('phone_number');
            
            // Other details
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
