<?php

namespace App\Http\Controllers\Website;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function functionBanner()
		{
			$banner = Banner::all();
			return view('website.pages.landing', compact('banner'));
		}
}
