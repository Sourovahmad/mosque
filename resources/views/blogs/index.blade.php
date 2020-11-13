@extends('includes.app')

@section('Breadcrumb')
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
<h1>Blogs</h1>
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
        <main class="page-content">

            <!-- Blogs area -->
            <div class="pg-blogs-area bg--white ptb--150">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xl-9">
                            <div class="pg-blogs right--sidebar">
                                <div class="row">
                                    <!-- Start Single Blog -->

                                    @foreach ($blogs as $blog)
                                        
                                  
                                    <div class="col-lg-6 col-md-6 col-xl-4">
                                        <article class="blog wow fadeInUp">
                                            <div class="blog__thumb">
                                                <a href="{{ route('blog-singleview', $blog->id) }}">
                                                    <img src="{{ asset($blog->image->thumbnail) }}" alt="single blog thumb">
                                                </a>
                                            </div>
                                            <div class="blog__content">

                                                <div class="blog__content__meta">
                                                    <p>{{ $blog->created_at->format('d F, Y') }} - <a href="{{ route('blog-singleview', $blog->id) }}">{{ $blog->author_name }}</a></p>
                                                </div>
                                                <h4 class="blog-title"><a href="{{ route('blog-singleview', $blog->id) }}">{{ $blog->title }} </a></h4>
                                                <p> @php echo substr($blog->description, 0,50) @endphp ... </p>
                                                <a href="{{ route('blog-singleview', $blog->id) }}" class="cr-readmore">Read</a>
                                            </div>
                                        </article>

                                        @endforeach
                                    </div><!-- //Start Single Blog -->



                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cr-pagination">
                                            <ul>
                
                                             {{$blogs->links()}}
                                            </ul>
                                        </div>
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
                                    <h4 class="widget-title">Recent Event</h4>
                                    <ul>
                                        @foreach ($events as $event)
                                            
                                        <li>
                                            <div class="wgt-recentpost__thumb">
                                                <a href="{{ route('event-single',$event->id) }}">
                                                    <img src="{{ asset($event->image->thumbnail) }}" alt="event thumb">
                                                </a>
                                            </div>
                                            <div class="wgt-recentpost__content">
                                                <h5><a href="{{ route('event-single',$event->id) }}">{{ $event->title }}</a></h5>
                                                <p><span>{{ $event->vanu  }}</span><span>{{ Carbon\Carbon :: parse($event->date)->format('d F, Y') }}</span></p>
                                            </div>
                                        </li>
                                        
                                        @endforeach
                                    
                                </div><!-- Single Widget (Recentpost) -->


                            </div><!-- //Sidebar Widgets  -->
                        </div><!-- //Sidebar Widgets Area -->
                    </div>
                </div>
            </div><!-- //Blogs area -->

        </main><!-- //Page Conent -->
@endsection