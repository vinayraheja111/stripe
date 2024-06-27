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
        Schema::create('subscription_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('stripe_subscription_id')->nullable();
            $table->string('stripe_subscription_schedule_id')->nullable();
            $table->string('stripe_customer_id');
            $table->string('subscription_plan_price_id');
            $table->float('plan_amount', 10, 2);
            $table->string('currency');
            $table->string('plan_interval');
            $table->integer('plan_interval_count');
            $table->timestamp('plan_period_start')->nullable();
            $table->timestamp('plan_period_end')->nullable();
            $table->timestamp('trial_end')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->enum('status', ['active', 'cancel']);
            $table->boolean('cancel')->default(0)->comment('0 => active, 1 => cancel');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_details');
    }
};
