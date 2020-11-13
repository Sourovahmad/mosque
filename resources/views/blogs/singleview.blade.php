@extends('includes.app')

@section('Breadcrumb')
    <!-- Top Banner -->

    {{-- <!-- Breadcrumb area -->
    <section class="cr-section breadcrumb-area" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="cr-breadcrumb text-center">
                        <h2 class="cr-breadcrumb__title">Event Details</h2>
                        <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                            <ul>
                                <li><a href="{{ route('home') }}">Events</a></li>
                                <li>Event</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- //Breadcrumb area --> --}}
    <!-- //Breadcrumb area -->
<!-- Top Banner -->
<div class="banner-area">
    <div class="banner bg-image--7 banner-text-slide slider-arrow--style1 slide-animate-text">

        <!-- Single Banner -->
        <div class="banner__single fullscreen d-flex align-items-center" data-black-overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner__content text-center">
                            {{-- <img src="{{asset('abasas/images/others-png/bismilla-word.png')}}" alt="bismillah word"> --}}
{{-- <h1> Event Details</h1> --}}
<h1 >Blog Details</h1>

                            {{-- <h3>Whoever builds a Masjid, seeking the pleasure of Allah, Allah shall build a house for
                                him in Paradise." [Bukhari]. </h3> --}}

                            {{-- <div class="banner__content__button">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

           
    
        </div><!-- //Single Banner -->
       
    </div>

  
</div><!-- //Top Banner -->


    <!-- //Top Banner -->
@endsection


@section('content')


			<!-- Page Conent -->
			<main class="page-content">

				<!-- Blogs area -->
				<div class="pg-blog-details-area bg--white ptb--150">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-xl-9">
								<div class="blog-details">
									<div class="blog-details__thumb">
										<img src="{{ asset($blog->image->url) }} " alt="Single blog Details" style="width: 100%">	
									</div>
									<h2 class="blog-details__title">{{ $blog->title }}</h2>
									<div class="blog-details__meta">
										<ul>
											<li><span>By: </span>{{ $blog->author_name }}</li>
											<li><span>Date : {{ $blog->created_at->format('d F, Y') }}</span> </li>
											<li><span>Category: {{ $blog->category->name }}</li>
										</ul>
									</div>
									<div class="blog-details__content clearfix">
										 @php
                                           echo $blog->description   
                                         @endphp
									</div>
									<div class="blog-details__footer d-flex justify-content-between align-items-center flex-wrap">
										<div class="social-icons social-icons--rounded">
											<ul>
												<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
												<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
												<li class="google-plus"><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
								
								</div>
							</div>

							<!-- Sidebar Widgets Area -->
							<div class="col-lg-4 col-xl-3">
								<!-- Sidebar Widgets -->
								<div class="sidebar widgets">

								

									<!-- Single Widget (Recentpost) -->
									<div class="single-widget wgt-recentpost">
										<h4 class="widget-title">Recent Blogs</h4>
										<ul>
                                            @foreach ($blogs as $blog)
                                                
                                           
											<li>
												<div class="wgt-recentpost__thumb">
													<a href="{{ route('blog-singleview',$blog->id) }}">
														<img src="{{ asset($blog->image->thumbnail) }}" alt="Blog thumb">
													</a>
												</div>
												<div class="wgt-recentpost__content">
													<h5><a href="{{ route('blog-singleview',$blog->id) }}">{{ $blog->title }}</a></h5>
												</div>
                                            </li>
                                            @endforeach
											
										</ul>
									</div><!-- Single Widget (Recentpost) -->

									

								</div><!-- //Sidebar Widgets  -->
							</div><!-- //Sidebar Widgets Area -->
						</div>
					</div>
				</div><!-- //Blogs area -->

			</main><!-- //Page Conent -->




@endsection