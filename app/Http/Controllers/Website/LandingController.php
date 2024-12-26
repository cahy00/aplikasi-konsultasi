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
			$banner = Banner::select('file')->get();
			$headline = Post::with(['categories'])->orderBy('created_at','desc')->where('status', 1)->where('is_headline', 1)->take(1)->get();
			$article = Post::with(['categories'])->where('category_id', 1)->get();
			$news = Post::with(['categories'])->where('category_id', 1)->where('status', 0)->orderBy('created_at','desc')->take(6)->get();
									return view('website.pages.landing', compact('banner', 'headline', 'article', 'news'));
		}

		// public function functionHeadline()
		// {
			
		// 	return view('website.pages.landing', compact('headline'));
		// }
}
