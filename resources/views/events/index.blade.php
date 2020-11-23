@extends('includes.app')

@section('Breadcrumb')
<!-- Top Banner -->


			<!-- Breadcrumb area -->
			<section class="cr-section breadcrumb-area" data-black-overlay="2">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="cr-breadcrumb text-center">
								<h2 class="cr-breadcrumb__title">EVENTS</h2>
								<div class="cr-breadcrumb__tree text-left text-md-left text-center">
									<ul>
										<li><a href="{{ route('home') }}">Home</a></li>
										<li>Events</li>
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
                                    <img src="{{ asset($event->image->thumbnail) }}" alt="event thumb">
                                </a>
                                <div class="event-single__date">

                                    <h3>{{Carbon\Carbon::parse( $event->date )->format('d F, Y')}}</h3>
                                </div>
                            </div>
                            <div class="event-single__content">
                                <h3><a href="{{ route('event-single', $event->id) }}">{{ $event->title }}</a></h3>
                                <p> @php echo substr($event->description, 0,50) @endphp ... </p>
                                <div class="event-single__content__location">
                                    <p><i class="icofont icofont-institution"></i>{{ $event->vanu}}</p>
                                    <p><i class="icofont icofont-wall-clock"></i>{{ Carbon\Carbon::parse($event->start_time)->format('h:i:a') }} to
                                        {{ Carbon\Carbon::parse($event->end_time)->format('h:i:a') }}</p>
                                      
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
