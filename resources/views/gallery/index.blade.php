@extends('includes.app')

@section('Breadcrumb')
<!-- //Breadcrumb area -->
			 <!-- Top Banner -->
			<div  class="banner-area">
				<div class="banner bg-image--8 banner-text-slide slider-arrow--style1 slide-animate-text">

						<!-- Single Banner -->
						<div class="banner__single fullscreen d-flex align-items-center" data-black-overlay="6">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="banner__content text-center">	
                                            
									
											<h1>Gallery</h1>
											
										</div>
									</div>
								</div>
							</div>
						</div><!-- //Single Banner -->


				</div>
			</div><!-- //Top Banner --> 


@endsection

@section('content')

<!-- Offer area -->
<section class="cr-section offer-area ptb--70 bg--pattern zig-zag--top zig-zag--bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                <div class="section-title text-center">

                    <h2>OUR GALLERY</h2>
                    {{-- <p>It is obligatory upon every muslim to offer their salaah (prayers) five times a day.  The image below shows the correct positions of  praying in every salah.</p> --}}
                </div>
            </div>
        </div>

        <div class="row">

            @foreach ($galleries as $gallery)
                
          
            <a mt-4 href="{{ $gallery->image->url }}" data-toggle="lightbox" data-gallery="gallery"
                class="col-md-4 mt-4">
                <img src="{{ $gallery->image->thumbnail }}" class="img-fluid rounded" style="width: 100%" alt="{{ $gallery->caption }}">
            </a>
            @endforeach
			<div class="cr-pagination text-right">
				<ul>
					{{ $galleries->links()}}
				</ul>
			</div>
        </div>
    </div>
</section><!-- //Offer area -->


@endsection
