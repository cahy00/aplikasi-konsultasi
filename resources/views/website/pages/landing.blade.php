@extends('website.index')

@section('content')

<section id="hero" class="hero section dark-background">

	<div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

		<div class="carousel-item active">
			@foreach ($banner as $item)
			<img src="uploads/{{$item->file}}" alt="">
			<div class="carousel-container">
				<h2>{{$item->name}}</h2>
				<p>{{$item->desc}}</p>
			</div>
					
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


<!-- About 3 Section -->
<section id="about-3" class="about-3 section">

	<div class="container">
		<div class="row gy-4 justify-content-between align-items-center">
			<div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
				<img src="assets1/img/img_sq_1.jpg" alt="Image" class="img-fluid">
				<a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn">
					<span class="play"><i class="bi bi-play-fill"></i></span>
				</a>
			</div>
			<div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
				<h2 class="content-title mb-4">Plants Make Life Better</h2>
				<p class="mb-4">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
					necessitatibus placeat, atque qui voluptatem velit explicabo vitae
					repellendus architecto provident nisi ullam minus asperiores commodi!
					Tenetur, repellat aliquam nihil illo.
				</p>
				<ul class="list-unstyled list-check">
					<li>Lorem ipsum dolor sit amet</li>
					<li>Velit explicabo vitae repellendu</li>
					<li>Repellat aliquam nihil illo</li>
				</ul>

				<p><a href="#" class="btn-cta">Get in touch</a></p>
			</div>
		</div>
	</div>
</section><!-- /About 3 Section -->

<div class="container">
	<div class="row">
		<div class="col-lg-10">
			<section id="services-2" class="services-2 section">
				<!-- Section Title -->
				<div class="container section-title" data-aos="fade-up">
					<h2 style="color: black">Services</h2>
					<p style="color: black">Necessitatibus eius consequatur</p>
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
								<div class="swiper-slide">
									<div class="service-item">
										<div class="service-item-contents">
											<a href="#">
												<span class="service-item-category">We do</span>
												<h2 class="service-item-title">Planting</h2>
											</a>
										</div>
										<img src="assets1/img/img_sq_1.jpg" alt="Image" class="img-fluid">
									</div>
								</div>
								<div class="swiper-slide">
									<div class="service-item">
										<div class="service-item-contents">
											<a href="#">
												<span class="service-item-category">We do</span>
												<h2 class="service-item-title">Mulching</h2>
											</a>
										</div>
										<img src="assets1/img/img_sq_3.jpg" alt="Image" class="img-fluid">
									</div>
								</div>
								<div class="swiper-slide">
									<div class="service-item">
										<div class="service-item-contents">
											<a href="#">
												<span class="service-item-category">We do</span>
												<h2 class="service-item-title">Watering</h2>
											</a>
										</div>
										<img src="assets1/img/img_sq_8.jpg" alt="Image" class="img-fluid">
									</div>
								</div>
			
								<div class="swiper-slide">
									<div class="service-item">
										<div class="service-item-contents">
											<a href="#">
												<span class="service-item-category">We do</span>
												<h2 class="service-item-title">Fertilizing</h2>
											</a>
										</div>
										<img src="assets1/img/img_sq_4.jpg" alt="Image" class="img-fluid">
									</div>
								</div>
								<div class="swiper-slide">
									<div class="service-item">
										<div class="service-item-contents">
											<a href="#">
												<span class="service-item-category">We do</span>
												<h2 class="service-item-title">Harvesting</h2>
											</a>
										</div>
										<img src="assets1/img/img_sq_5.jpg" alt="Image" class="img-fluid">
									</div>
								</div>
								<div class="swiper-slide">
									<div class="service-item">
										<div class="service-item-contents">
											<a href="#">
												<span class="service-item-category">We do</span>
												<h2 class="service-item-title">Mowing</h2>
											</a>
										</div>
										<img src="assets1/img/img_sq_6.jpg" alt="Image" class="img-fluid">
									</div>
								</div>
								<div class="swiper-slide">
									<div class="service-item">
										<div class="service-item-contents">
											<a href="#">
												<span class="service-item-category">We do</span>
												<h2 class="service-item-title">Seeding Plants</h2>
											</a>
										</div>
										<img src="assets1/img/img_sq_8.jpg" alt="Image" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="recent-posts" class="recent-posts section">
			
				<!-- Section Title -->
				<div class="container section-title" data-aos="fade-up">
					<h2>Recent Posts</h2>
					<p>Necessitatibus eius consequatur</p>
				</div><!-- End Section Title -->
			
				<div class="container">
			
					<div class="row gy-5">
			
						<div class="col-xl-4 col-md-6">
							<div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
			
								<div class="post-img position-relative overflow-hidden">
									<img src="assets1/img/blog/blog-1.jpg" class="img-fluid" alt="">
									<span class="post-date">December 12</span>
								</div>
			
								<div class="post-content d-flex flex-column">
			
									<h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
			
									<div class="meta d-flex align-items-center">
										<div class="d-flex align-items-center">
											<i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
										</div>
										<span class="px-3 text-black-50">/</span>
										<div class="d-flex align-items-center">
											<i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
										</div>
									</div>
			
									<hr>
			
									<a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
			
								</div>
			
							</div>
						</div><!-- End post item -->
			
						<div class="col-xl-4 col-md-6">
							<div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">
			
								<div class="post-img position-relative overflow-hidden">
									<img src="assets1/img/blog/blog-2.jpg" class="img-fluid" alt="">
									<span class="post-date">July 17</span>
								</div>
			
								<div class="post-content d-flex flex-column">
			
									<h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
			
									<div class="meta d-flex align-items-center">
										<div class="d-flex align-items-center">
											<i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
										</div>
										<span class="px-3 text-black-50">/</span>
										<div class="d-flex align-items-center">
											<i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
										</div>
									</div>
			
									<hr>
			
									<a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
			
								</div>
			
							</div>
						</div><!-- End post item -->
			
						<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
							<div class="post-item position-relative h-100">
			
								<div class="post-img position-relative overflow-hidden">
									<img src="assets1/img/blog/blog-3.jpg" class="img-fluid" alt="">
									<span class="post-date">September 05</span>
								</div>
			
								<div class="post-content d-flex flex-column">
			
									<h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>
			
									<div class="meta d-flex align-items-center">
										<div class="d-flex align-items-center">
											<i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
										</div>
										<span class="px-3 text-black-50">/</span>
										<div class="d-flex align-items-center">
											<i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
										</div>
									</div>
			
									<hr>
			
									<a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
			
								</div>
			
							</div>
						</div><!-- End post item -->
			
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
		</div>
		<div class="col-lg-2 sidebar">
			<div class="widgets-container">

				<!-- Blog Author Widget -->
				<div class="blog-author-widget widget-item">

				</div><!--/Blog Author Widget -->

				<!-- Search Widget -->
				<div class="search-widget widget-item">

					<h3 class="widget-title">Search</h3>
					<form action="">
						<input type="text">
						<button type="submit" title="Search"><i class="bi bi-search"></i></button>
					</form>

				</div><!--/Search Widget -->

				<!-- Categories Widget -->
				<div class="categories-widget widget-item">

					<h3 class="widget-title">Categories</h3>
					<ul class="mt-3">
						<li><a href="#">General <span>(25)</span></a></li>
						<li><a href="#">Lifestyle <span>(12)</span></a></li>
						<li><a href="#">Travel <span>(5)</span></a></li>
						<li><a href="#">Design <span>(22)</span></a></li>
						<li><a href="#">Creative <span>(8)</span></a></li>
						<li><a href="#">Educaion <span>(14)</span></a></li>
					</ul>

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
</div>


@endsection
