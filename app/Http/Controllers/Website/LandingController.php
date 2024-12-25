<?php

namespace App\Http\Controllers\Website;

use App\Models\Post;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
		{
			$banner = Banner::all();
			$headline = Post::where('status', 1)
									->where('is_headline', 1)
									->get();
			return view('website.pages.landing', compact('banner', 'headline'));
		}

		// public function functionHeadline()
		// {
			
		// 	return view('website.pages.landing', compact('headline'));
		// }
}
