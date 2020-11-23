@extends('includes.app')
@section('Breadcrumb')
<!-- Top Banner -->


			<!-- Breadcrumb area -->
			<section class="cr-section breadcrumb-area" data-black-overlay="2">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="cr-breadcrumb text-center">
								<h2 class="cr-breadcrumb__title">Event Details</h2>
								<div class="cr-breadcrumb__tree text-left text-md-left text-center">
									<ul>
										<li><a href="{{ route('home') }}">Home</a></li>
										<li>Event -  {{ $event->title }} </li>
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

    <!-- Page Conent -->
    <main class="page-content">

        <!-- Event Details Area -->
        <div class="event-details-area ptb--150 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <div class="event-details">
                            <div class="event-details__thumb">

                                
                                @if (is_null($event->video))
                                <img src="{{ asset($event->image->url) }}" alt="Single event Details" style="width: 100%">
                                @else
                                <div class="embed-responsive embed-responsive-16by9">
                                    @php
                                       echo $event->video ;
                                    @endphp 
                                </div>
                                @endif
                                

                            </div>
                            <h2 class="event-details__title">{{ $event->title }}</h2>
                            <div class="event-details__meta">
                                <ul>
                                    <li><span>Date:</span> {{ Carbon\Carbon::parse($event->date)->format('d F, Y') }}</li>
                                    <li><span>Vanu :</span> {{ $event->vanu }}</li>
                                    <li><span>Time :</span>{{ Carbon\Carbon::parse($event->start_time)->format('h:i:a') }} -
                                        {{ Carbon\Carbon::parse($event->end_time)->format('h:i:a') }}</li>
                                </ul>
                            </div>
                            <div class="event-details__content">
                               
                                <p>@php echo($event->description) @endphp</p>
                                
                                
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
                                            <a href="{{ route('event-single', $event->id) }}">
                                                <img src="{{ asset($event->image->thumbnail)}}" alt="event thumb">
                                            </a>
                                        </div>
                                        <div class="wgt-recentpost__content">
                                            <h5><a href="{{ route('event-single', $event->id) }}">{{ $event->title }}</a></h5>
                                            <p><span>{{ $event->vanue }}</span><span>{{ Carbon\Carbon::parse($event->date)->format('d F, Y') }}</span></p>
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
