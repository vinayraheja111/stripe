<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubsriptionPlan;
use Carbon\Carbon;

class SubsriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = Carbon::now()->format('Y-m-d H:i:s');

        SubsriptionPlan::create([
             'name' => 'Monthly',
             'stripe_price_id' => 'price_1PVciS2NeVxrRCJC7MYylBHf',
             'trail_days' => 5,
             'amount' => 12,
             'type' => 1,
             'status' => 1,
             'created_at' => $currentTime,
             'updated_at' => $currentTime
        ]);
        SubsriptionPlan::create([
             'name' => 'Yealy',
             'stripe_price_id' => 'price_1PVckw2NeVxrRCJChe6vZXpt',
             'trail_days' => 5,
             'amount' => 100,
             'type' => 1,
             'status' => 1,
             'created_at' => $currentTime,
             'updated_at' => $currentTime
        ]);
        SubsriptionPlan::create([
             'name' => 'Lifetime',
             'stripe_price_id' => 'price_1PVcm42NeVxrRCJCqvrRg7CQ',
             'trail_days' => 5,
             'amount' => 400,
             'type' => 1,
             'status' => 1,
             'created_at' => $currentTime,
             'updated_at' => $currentTime
        ]);
    }
}
