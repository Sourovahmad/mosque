@extends('includes.app')

@section('Breadcrumb')
<!-- Top Banner -->


			<!-- Breadcrumb area -->
			<section class="cr-section breadcrumb-area" data-black-overlay="2">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="cr-breadcrumb text-center">
								<h2 class="cr-breadcrumb__title TextUppercase ">MMC-Gallery</h2>
								<div class="cr-breadcrumb__tree text-left text-md-left text-center">
									<ul>
										<li> <a href="route('home') ">Home</a>  </li>
										<li>Gallery</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section><!-- //Breadcrumb area -->

<!-- //Top Banner -->
@endsection

@section('content')

<!-- Offer area -->
<section class="cr-section offer-area ptb--70 bg--pattern ">
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
                
          
            <a mt-4 href="{{ route('home') }}/{{ $gallery->image->url }}" data-toggle="lightbox" data-gallery="gallery"
                class="col-md-4 mt-4">
                <img src="{{ route('home') }}/{{ $gallery->image->thumbnail }}" class="img-fluid rounded" style="width: 100%" alt="{{ $gallery->caption }}">
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
