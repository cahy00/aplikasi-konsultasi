@extends('website.layout-detail')

@section('detail-content')
    
		@section('title-detail')
				Berita Kepegawaian
		@endsection

		@section('desc-detail')
				Berita Kepegawaian Kantor Regional XIV BKN 
		@endsection

		<section id="blog-posts-2" class="blog-posts-2 section">
			<div class="container">
				<div class="row gy-4">

					@foreach ($berita as $item)
					<div class="col-lg-4">
            <article class="position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="uploads/{{$item->thumbnail}}" class="img-fluid" alt="" style="min-height: 300px; max-height:300px; min-width:300px;max-width:300px">
              </div>

              <div class="meta d-flex align-items-end">
                <span class="post-date">{{$item->created_at->format('d F')}}</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Admin</span>
                </div>
                <span class="px-3 text-black-50"></span>
                {{-- <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Kepegawaian</span>
                </div> --}}
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{!!strip_tags(Str::words($item->title, 6,'...'))!!}</h3>
                <a href="/detail-post/{{$item->slug}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </article>
          </div>
					@endforeach

					{{$berita->links()}}
          

        </div>
			</div>
		</section>
@endsection