<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

USE App\SubscriptionPlan;

class SiteController extends Controller
{
    public function home(){

        $features = SubscriptionPlan::with(['features'])->get();

        return view('site.home', ['features' => $features]);
    }
}
