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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->uniqid();
            $table->integer('phone');
            $table->integer('qty');
            $table->string('address');
            $table->string('address2')->nullable();
            $table->string('country');
            $table->string('state');
            $table->integer('zip');
            $table->string('payment_method');
            $table->string('payment_states');
            $table->string('delivery_states')->default('New');
            $table->integer('coubon')->default('0');
            $table->integer('total');
            $table->string('menu_id');
            $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
