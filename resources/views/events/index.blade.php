@extends('includes.app')

@section('Breadcrumb')
<!-- //Breadcrumb area -->
			 <!-- Top Banner -->
             <div  class="banner-area">
				<div class="banner bg-image--4 banner-text-slide slider-arrow--style1 slide-animate-text">

						<!-- Single Banner -->
						<div class="banner__single fullscreen d-flex align-items-center" data-black-overlay="6">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="banner__content text-center">	
                                            <img src="{{asset('abasas/images/others-png/bismilla-word.png')}}" alt="bismillah word">
									
											<h3>Whoever builds a Masjid, seeking the pleasure of Allah, Allah shall build a house for him in Paradise." [Bukhari]. </h3>
											
											<div class="banner__content__button">
											</div>
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
				
        <div class="events-grid ptb--150 bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="events2">


                      @foreach ($events as $event)
                          
                    
                            <!-- Event Single -->
                            <article class="event-single wow fadeInRight">
                                <div class="event-single__thumb">
                                    <a href="{{ route('event-single', $event->id) }}">
                                        <img src="{{ asset('abasas/images/event/layout-2/2.jpg') }}" alt="event thumb">
                                    </a>
                                    <div class="event-single__date">

                                        <h3>{{Carbon\Carbon::parse( $event->date )->format('d F, Y')}}</h3>
                                    </div>
                                </div>
                                <div class="event-single__content">
                                    <h3><a href="{{ route('event-single', $event->id) }}">{{ $event->title }}</a></h3>
                                    <p>{{ substr($event->description, 0,50) }} </p>
                                    <div class="event-single__content__location">
                                        <p><i class="icofont icofont-institution"></i>{{ $event->vanu}}</p>
                                        <p><i class="icofont icofont-wall-clock"></i> {{Carbon\Carbon::parse($event->start_time)->format('h:i:a')  }} to {{Carbon\Carbon::parse($event->end_time)->format('h:i:a')  }}</p>
                                    </div>
                                </div>
                            </article>
                            <!-- //Event Single -->

                      @endforeach
         

                

                        </div>
                        <div class="cr-pagination text-right">
                            <ul>
                                {{ $events->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- //Page Conent -->

    
@endsection