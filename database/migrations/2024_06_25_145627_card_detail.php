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
        Schema::create('card_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('card_id')->nullable();
            $table->string('name')->nullable();
            $table->string('card_no')->nullable();
            $table->string('brand')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_detail');
    }
};
