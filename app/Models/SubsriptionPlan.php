<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubsriptionPlan extends Model
{
    use HasFactory;
    protected $table = 'subscription_plans';
    protected $fillable = ['name', 'stripe_price_id', 'trail_days', 'amount', 'type', 'status'];
}
