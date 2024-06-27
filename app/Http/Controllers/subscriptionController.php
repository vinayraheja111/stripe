<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubsriptionPlan;

class subscriptionController extends Controller
{
    public function index(){
        $plans = SubsriptionPlan::where('status','1')->get();
        return view('subscription',compact('plans'));
    }
}
