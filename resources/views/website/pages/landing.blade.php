@extends('website.index')

@section('content')

<section id="hero" class="hero section dark-background">

	<div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

		<div class="carousel-item active">
			@foreach ($banner as $banner)
			<img src="uploads/{{$banner->file}}" alt="">
			{{-- <div class="carousel-container">
				<h2>{{$banner->name}}</h2>
				<p>{{$banner->desc}}</p>
			</div> --}}
					
			@endforeach
		</div>

		<a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
		</a>

		<a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
			<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
		</a>

		<ol class="carousel-indicators"></ol>

	</div>

</section>

<section id="features" class="features section">

	<!-- Section Title -->
	<div class="container section-title" data-aos="fade-up">
		<h2>Informasi Kepegawaian</h2>
		<p>Informasi Kepegawaian Kanreg XIV BKN</p>
	</div><!-- End Section Title -->

	<div class="container">

		<div class="d-flex justify-content-center">

			<ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

				<li class="nav-item">
					<a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
						<h4>Kegiatan & Berita</h4>
					</a>
				</li><!-- End tab nav item -->

				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
						<h4>Pengumuman</h4>
					</a><!-- End tab nav item -->

				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
						<h4>FAQ</h4>
					</a>
				</li><!-- End tab nav item -->

			</ul>

		</div>

		<div class="tab-content" data-aos="fade-up" data-aos-delay="200">

			<div class="tab-pane fade active show" id="features-tab-1">
				<div class="row">
					<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
						<h3>Voluptatem dignissimos provident</h3>
						<p class="fst-italic">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.
						</p>
						<ul>
							<li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
							<li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
							<li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
						</ul>
					</div>
					<div class="col-lg-6 order-1 order-lg-2 text-center">
						<img src="assets1/img/hero_5.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div><!-- End tab content item -->

			<div class="tab-pane fade" id="features-tab-2">
				<div class="row">
					<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
						<h3>Neque exercitationem debitis</h3>
						<p class="fst-italic">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.
						</p>
						<ul>
							<li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
							<li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
							<li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
							<li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
						</ul>
					</div>
					<div class="col-lg-6 order-1 order-lg-2 text-center carousel">
						<img src="{{'bkn/announce.png'}}" alt="" class="img-fluid">
					</div>
				</div>
			</div><!-- End tab content item -->

			<div class="tab-pane fade" id="features-tab-3">
				<div class="row">
					<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
						<h3>Voluptatibus commodi accusamu</h3>
						<ul>
							<li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
							<li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
							<li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
						</ul>
						<p class="fst-italic">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.
						</p>
					</div>
					<div class="col-lg-6 order-1 order-lg-2 text-center">
						<img src="assets/img/features-illustration-3.webp" alt="" class="img-fluid">
					</div>
				</div>
			</div><!-- End tab content item -->

		</div>

	</div>

</section>

<section id="about" class="about section">

	<div class="content">
		<div class="container">
			<div class="row">
				@foreach ($headline as $item)
					<div class="col-lg-6 mb-4 mb-lg-0">
						<img src="uploads/{{$item->thumbnail}}" alt="Image " class="img-fluid img-overlap" data-aos="zoom-out" style="min-height: 630px; max-height:630px; min-width:550px;max-width:550px">
					</div>
					<div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
						<h3 class="content-subtitle text-white opacity-50">Headline</h3>
						<h2 class="content-title mb-4">{{$item->title}}</h2>
						<p class="opacity-50">{!!strip_tags(Str::words($item->content, 100,'...'))!!}</p>

				<p><a href="detail-post/{{$item->slug}}" class="btn-cta">Get in touch</a></p>
						
					</div>
				@endforeach
				
			</div>
		</div>
	</div>
</section>

<section id="recent-posts" class="recent-posts section">
			
	<!-- Section Title -->
	<div class="container section-title" data-aos="fade-up">
		<h2>Berita Kepegawaian</h2>
		<p>Berita Kepegawaian Kantor Regioanl XIV BKN</p>
	</div>
	<!-- End Section Title -->

	<div class="container">

		<div class="row gy-5">

			@foreach ($news as $item)
			<div class="col-xl-4 col-md-6">
				<div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

					<div class="post-img position-relative overflow-hidden">
						<img src="uploads/{{$item->thumbnail}}" class="img-fluid" alt="" style="min-height: 300px; max-height:300px; min-width:450px;max-width:450px">
						<span class="post-date">{{$item->created_at->format('d F')}}</span>
					</div>

					<div class="post-content d-flex flex-column">
						<div class="meta d-flex align-items-center">
							<div class="d-flex align-items-center">
								<i class="bi bi-person"></i> <span class="ps-2">Admin Web</span>
							</div>
							<span class="px-3 text-black-50">/</span>
							<div class="d-flex align-items-center">
								<i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
							</div>
						</div>
						<br>
						<h3 class="post-title">{!!strip_tags(Str::words($item->title, 6,'...'))!!}</h3>
						<p class="opacity-50">{!!strip_tags(Str::words($item->content, 10,'...'))!!}</p>
						

						<hr>

						<a href="detail-post/{{$item->slug}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

					</div>

				</div>
			</div>
			@endforeach

			


		</div>

	</div>

</section>

<section id="services-2" class="services-2 section">
	<!-- Section Title -->
	<div class="container section-title" data-aos="fade-up">
		<h2>Artikel Kepegawaian</h2>
		<p>Artikel kepegawaian Kanreg XIV BKN</p>
	</div><!-- End Section Title -->

	<div class="services-carousel-wrap">
		<div class="container">
			<div class="swiper init-swiper">
				<script type="application/json" class="swiper-config">
					{
						"loop": true,
						"speed": 600,
						"autoplay": {
							"delay": 5000
						},
						"slidesPerView": "auto",
						"pagination": {
							"el": ".swiper-pagination",
							"type": "bullets",
							"clickable": true
						},
						"navigation": {
							"nextEl": ".js-custom-next",
							"prevEl": ".js-custom-prev"
						},
						"breakpoints": {
							"320": {
								"slidesPerView": 1,
								"spaceBetween": 40
							},
							"1200": {
								"slidesPerView": 3,
								"spaceBetween": 40
							}
						}
					}
				</script>
				<button class="navigation-prev js-custom-prev">
					<i class="bi bi-arrow-left-short"></i>
				</button>
				<button class="navigation-next js-custom-next">
					<i class="bi bi-arrow-right-short"></i>
				</button>
				<div class="swiper-wrapper">
					@foreach ($article as $item)
					<div class="swiper-slide">
						<div class="service-item">
							<div class="service-item-contents">
								<a href="#">
									<span class="service-item-category">Artikel Kepegawaian</span>
									<h2 class="service-item-title">{{$item->title}}</h2>
								</a>
							</div>
							<img src="uploads/{{$item->thumbnail}}" alt="Image" class="img-fluid" style="min-height: 450px; max-height:450px; min-width:450px;max-width:450px">
						</div>
					</div>
					@endforeach

				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</section>

<section id="call-to-action" class="call-to-action section light-background">

	<div class="content">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h3>Subscribe To Our Newsletter</h3>
					<p class="opacity-50">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Nesciunt, reprehenderit!
					</p>
				</div>
				<div class="col-lg-6">
					<form action="forms/newsletter.php" class="form-subscribe php-email-form">
						<div class="form-group d-flex align-items-stretch">
							<input type="email" name="email" class="form-control h-100" placeholder="Enter your e-mail">
							<input type="submit" class="btn btn-secondary px-4" value="Subcribe">
						</div>
						<div class="loading">Loading</div>
						<div class="error-message"></div>
						<div class="sent-message">
							Your subscription request has been sent. Thank you!
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- <div class="container">
	<div class="row">
		<div class="col-lg-8">
			
		</div>
		<div class="col-lg-4 sidebar">
			<div class="widgets-container">

				<!-- Blog Author Widget -->
				<div class="blog-author-widget widget-item">

				</div><!--/Blog Author Widget -->

				<!-- Search Widget -->
				<div class="search-widget widget-item">

					<h3 class="widget-title">Search</h3>
					<form action="">
						<input type="text" placeholder="Cari Apa Saja">
						<button type="submit" title="Search"><i class="bi bi-search"></i></button>
					</form>

				</div><!--/Search Widget -->

				<!-- Categories Widget -->
				<div class="categories-widget widget-item">

					<iframe src="https://www.instagram.com/bknkanreg14/embed/" width="100%" height="400" frameborder="0" scrolling="no"></iframe>

				</div><!--/Categories Widget -->

				<!-- Recent Posts Widget 2 -->
				<div class="recent-posts-widget-2 widget-item">

					<h3 class="widget-title">Recent Posts</h3>

					<div class="post-item">
						<h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
						<time datetime="2020-01-01">Jan 1, 2020</time>
					</div><!-- End recent post item-->

					<div class="post-item">
						<h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
						<time datetime="2020-01-01">Jan 1, 2020</time>
					</div><!-- End recent post item-->

					<div class="post-item">
						<h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
						<time datetime="2020-01-01">Jan 1, 2020</time>
					</div><!-- End recent post item-->

					<div class="post-item">
						<h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
						<time datetime="2020-01-01">Jan 1, 2020</time>
					</div><!-- End recent post item-->

					<div class="post-item">
						<h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
						<time datetime="2020-01-01">Jan 1, 2020</time>
					</div><!-- End recent post item-->

				</div><!--/Recent Posts Widget 2 -->

				<!-- Tags Widget -->
				<div class="tags-widget widget-item">

					<h3 class="widget-title">Tags</h3>
					<ul>
						<li><a href="#">App</a></li>
						<li><a href="#">IT</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">Mac</a></li>
						<li><a href="#">Design</a></li>
						<li><a href="#">Office</a></li>
						<li><a href="#">Creative</a></li>
						<li><a href="#">Studio</a></li>
						<li><a href="#">Smart</a></li>
						<li><a href="#">Tips</a></li>
						<li><a href="#">Marketing</a></li>
					</ul>

				</div><!--/Tags Widget -->

			</div>
		</div>
	</div>
</div> --}}


@endsection
