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
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('stripe_price_id')->unique();
            $table->integer('trail_days')->nullable();
            $table->float('amount',10,2);
            $table->integer('type')->comment('1 => Monthly | 2=> Yearly | 3 => Liftetime');
            $table->integer('status')->comment('1 => active | 2 => inActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_plans');
    }
};
