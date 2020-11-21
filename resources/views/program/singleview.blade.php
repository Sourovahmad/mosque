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
<h1 >Program Details</h1>
<div class="cr-breadcrumb__tree text-left text-md-left text-center">
    <ul>
        <li><a href="{{ route('programs') }}">Program</a></li>
        <li>{{ $program->title }}</li>
    </ul>
</div>
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

        <!-- Event Details Area -->
        <div class="event-details-area ptb--150 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <div class="event-details">
                            <div class="event-details__thumb">

                                @if (is_null($program->video))
                                <img src="{{ asset($program->image->url) }}" alt="Single Program Details" style="width: 100%">
                                @else
                                <div class="embed-responsive embed-responsive-16by9">
                                    @php
                                    echo $program->video ;
                                    @endphp
                                </div>
                                @endif

                            </div>
                            <h2 class="event-details__title">{{ $program->title }}</h2>
                        
                            <div class="event-details__content">

                                <p>@php echo($program->description) @endphp</p>

                            </div>


                        </div>
                    </div>

                    <!-- Sidebar Widgets Area -->
                    <div class="col-lg-4 col-xl-3">
                        <!-- Sidebar Widgets -->
                        <div class="sidebar widgets">


                            <!-- Single Widget (Recentpost) -->
                            <div class="single-widget wgt-recentpost">
                                <h4 class="widget-title">Recent Program</h4>

                                <ul>
                                    @foreach ($programs as $program)
                                        
                            
                                    <li>
                                        <div class="wgt-recentpost__thumb">
                                            <a href="{{ route('program-single', $program->id) }}">
                                                <img src="{{ asset($program->image->thumbnail)}}" alt="event thumb">
                                            </a>
                                        </div>
                                        <div class="wgt-recentpost__content">
                                            <h5><a href="{{ route('program-single', $program->id) }}">{{ $program->title }}</a></h5>
                                
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div><!-- Single Widget (Recentpost) -->
                        </div><!-- //Sidebar Widgets  -->
                    </div><!-- //Sidebar Widgets Area -->

                </div>
            </div>
        </div><!-- //Event Details Area -->

    </main><!-- //Page Conent -->


@endsection
