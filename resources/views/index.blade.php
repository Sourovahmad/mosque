@extends('includes.app')

@section('Breadcrumb')
<!-- //Breadcrumb area -->
<!-- Top Banner -->
<div class="banner-area">
    <div class="banner bg-image--1 banner-text-slide slider-arrow--style1 slide-animate-text">

        <!-- Single Banner -->
        <div class="banner__single fullscreen d-flex align-items-center" data-black-overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner__content text-center">
                            <img src="{{asset('abasas/images/others-png/bismilla-word.png')}}" alt="bismillah word">
                            <h3>In the name of <strong>“Allah”</strong></h3>
                            <h1>Come to the straight path</h1>
                            <div class="banner__content__button">
                                <a href="" class="cr-btn cr-btn--transparent cr-btn--light cr-btn--sm"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- //Single Banner -->

        <!-- Single Banner -->
        <div class="banner__single fullscreen d-flex align-items-center" data-black-overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner__content text-center">
                            <img src="{{asset('abasas/images/others-png/bismilla-word.png')}}" alt="bismillah word">

                            <h3>Whoever builds a Masjid, seeking the pleasure of Allah, Allah shall build a house for
                                him in Paradise." [Bukhari]. </h3>

                            <div class="banner__content__button">
                                <a href="{{ route('donations.index') }}#donate"
                                    class="cr-btn cr-btn--transparent cr-btn--light cr-btn--sm"><span>Donate
                                        Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- //Single Banner -->

    </div>
</div><!-- //Top Banner -->


@endsection

@section('content')



<!-- About Area -->
<section class="about-area ptb--150 bg--white flower--left-top flower--right-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <h2> Masjid Mission Center <strong>“MMC”</strong></h2>
                    <h4>87-26 175th St, Queens, NY 11432, United States</h4>
                    <p><span class="mark">Masjid Mission Center ( MMC )</span>   is a 501 ( c ) religious organization in
                        Jamaica NY - a community of believers adhering to the Qur'an and the life traditions of
                        Prophet Muhammad (Peace and Blessing Be Upon Him)</p>
                    <div class="about-content__bottom d-flex align-items-center flex-wrap flex-sm-nowrap">
                        <div class="about-content__bottom__left">
                            {{-- <p>Have you any quary?</p>
											<h3 class="body--font"><a href="callto://+00812356369">+00812 356 369</a></h3> --}}

                        </div>
                        {{-- <span>or</span> --}}
                        <div class="about-content__bottom__right">
                            <a href="{{ route('about.index') }}"
                                class="cr-btn cr-btn--sm cr-btn--transparent cr-btn--dark"><span>Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-images clearfix">
                    <img class="wow fadeInUp" src="{{ asset('abasas/images/about/large-1.jpg')}}" alt="about image">
                    <img class="wow fadeInUp" src="{{ asset('abasas/images/about/small-1.jpg')}}" alt="smalal image">
                    <img class="wow fadeInUp" data-wow-delay="0.1s" src="{{ asset('abasas/images/about/small-2.jpg')}}"
                        alt="smalal image">
                </div>
            </div>
        </div>
    </div>
</section><!-- //About Area -->

<!-- Pillar Of Islam -->
<section class="cr-section islams-pillar-area ptb--120 bg--pattern zig-zag--top zig-zag--bottom">
    <div
        class="islams-pillars d-flex justify-content-between justify-content-lg-center align-items-center flex-wrap flex-xl-nowrap flex-xx-nowrap flex-sp-nowrap">
        <div class="islams-pillars__thumb text-lg-center wow fadeInLeft">
            <img src="{{ asset('abasas/images/pillars/pillars-thumb.png')}}" alt="pillars thumb">
        </div>
        <div class="islams-pillars__content">
            <h2>Take the proper knowledge about piller of Islam</h2>
            <p><span>Piller of islam</span> is the know how to rsue pleasure rationally encounter equ</p>
        </div>
        <div
            class="pillars d-flex justify-content-lg-between flex-md-wrap justify-content-md-center justify-content-sm-center justify-content-center">
            <div class="pillar__single wow fadeInRight" data-wow-delay="0s">
                <div class="pillar__single__inner">
                    <img class="pillar__single__icon" src="{{ asset('abasas/images/pillars/pillar-icon-1.png')}}"
                        alt="pillar 1">
                    <h3>Kalima</h3>
                </div>
            </div>
            <div class="pillar__single wow fadeInRight" data-wow-delay="0.1s">
                <div class="pillar__single__inner">
                    <img class="pillar__single__icon" src="{{ asset('abasas/images/pillars/pillar-icon-2.png')}}"
                        alt="pillar 2">
                    <h3>Salat</h3>
                </div>
            </div>
            <div class="pillar__single wow fadeInRight" data-wow-delay="0.2s">
                <div class="pillar__single__inner">
                    <img class="pillar__single__icon" src="{{ asset('abasas/images/pillars/pillar-icon-3.png')}}"
                        alt="pillar 3">
                    <h3>Zakat</h3>
                </div>
            </div>
            <div class="pillar__single wow fadeInRight" data-wow-delay="0.3s">
                <div class="pillar__single__inner">
                    <img class="pillar__single__icon" src="{{ asset('abasas/images/pillars/pillar-icon-4.png')}}"
                        alt="pillar 4">
                    <h3>Siam</h3>
                </div>
            </div>
            <div class="pillar__single wow fadeInRight" data-wow-delay="0.4s">
                <div class="pillar__single__inner">
                    <img class="pillar__single__icon" src="{{ asset('abasas/images/pillars/pillar-icon-5.png')}}"
                        alt="pillar 5">
                    <h3>HAJJ</h3>
                </div>
            </div>
        </div>
    </div>
</section><!-- //Pillar Of Islam -->

{{-- <!-- Upcoming Events -->
				<section class="cr-section events-area bg--white ptb--150 flower--left-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
								<div class="section-title text-center">
									<h4>Our “Events”</h4>
									<h2>Upcoming Events</h2>
									<p><span>Islam</span> is the know how to pursue pleasure rationally encounter consequences that are extremely painful again is there anyone who loves or pursues or desires to obtain pain of itself</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="event">

									<!-- Event Content -->
									<div class="event__inner event-slide-active slider-dots--style1">
				
										
										@foreach ($events as $event )
											
										
										<!-- Event Single -->
										<div class="event__single">
											<div class="event__single__inner">
												<div class="event__single__thumb">
													<img src="{{ asset($event->image->thumbnail) }}" alt="event thumb">
<div class="event__single__date">
    <h3>{{ Carbon\Carbon::parse($event->date)->format('d F, Y') }}</h3>
</div>
</div>
<div class="event__single__content">
    <h3><a href="event-details.html">{{ $event->title }}</a></h3>
    <p>@php echo substr($event->description, 0,50) @endphp</p>
    <div class="event__single__content__location">
        <p><i class="icofont icofont-institution"></i> {{ $event->vanu }}</p>
        <p><i class="icofont icofont-wall-clock"></i> {{Carbon\Carbon::parse($event->start_time)->format('h:i:a')  }} to
            {{Carbon\Carbon::parse($event->end_time)->format('h:i:a')  }}</p>
        </p>
    </div>
</div>
</div>
</div><!-- //Event Single -->
@endforeach




</div><!-- //Event Content -->

<!-- Event Filters -->
<div class="event__filters">
    <div class="event-filters-active">
        @foreach ($events as $event)

        <div class="event__filters__single">

            <div class="event__filters__single__inner">
                <img src="{{ asset($event->image->thumbnail)}}" alt="event filters">
            </div>
        </div>
        @endforeach
    </div>
</div><!-- //Event Filters -->

</div>
</div>
</div>
</div>
</section><!-- //Upcoming Events --> --}}


<!-- Upcoming Events -->
<section class="cr-section events-area bg--white ptb--150 flower--left-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                <div class="section-title text-center">
                    <h4>Our “Events”</h4>
                    <h2>Upcoming Events</h2>
                    <p><span>Islam</span> is the know how to pursue pleasure rationally encounter consequences that are
                        extremely painful again is there anyone who loves or pursues or desires to obtain pain of itself
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="event">

                    <!-- Event Content -->
                    <div class="event__inner event-slide-active slider-dots--style1">

                        <!-- Event Single -->
                        @foreach ($events as $event)


                        <div class="event__single">
                            <div class="event__single__inner">
                                <div class="event__single__thumb">
                                    <img src="{{ asset($event->image->url)}}" alt="event thumb" style="height: 354px; width:315px; object-fit: cover;">
                                    <div class="event__single__date">
                                        <h3>{{ Carbon\Carbon::parse($event->date)->format('d F, Y') }}</h3>
                                    </div>
                                </div>
                                <div class="event__single__content">
                                    <h3><a href="{{ route('event-single', $event->id) }}">{{ $event->title }}</a></h3>
                                    <p>@php echo substr($event->description, 0,130) @endphp ...</p>
                                    <div class="event__single__content__location">
                                        <p><i class="icofont icofont-institution"></i> {{ $event->vanu }}
                                        </p>
                                        <p><i class="icofont icofont-wall-clock"></i>{{ Carbon\Carbon::parse($event->start_time)->format('h:i:a') }} to {{ Carbon\Carbon::parse($event->end_time)->format('h:i:a') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- //Event Single -->
                        @endforeach
                    </div><!-- //Event Content -->

                    <!-- Event Filters -->
                    <div class="event__filters">
                        <div class="event-filters-active">
                            @foreach ($events as $event)


                            <div class="event__filters__single">
                                <div class="event__filters__single__inner">
                                    <img src="{{ asset($event->image->thumbnail)}}" alt="event filters" style="height: 118px; width:158px; object-fit: cover;">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div><!-- //Event Filters -->

                </div>
            </div>
        </div>
    </div>
</section><!-- //Upcoming Events -->


<!-- Team Area -->
<section class="cr-section offer-area ptb--70 bg--pattern zig-zag--top 	">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                <div class="section-title text-center">

                    <h2>Islamic Prayer</h2>
                    <p>It is obligatory upon every muslim to offer their salaah (prayers) five times a day. The image
                        below shows the correct positions of praying in every salah.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-12">
                <img class="w-100" src="{{ asset('abasas/images/fajr-2-rakat.png')}}" alt="Salath">
            </div>
        </div>
    </div>
</section>
<!-- Salat times area -->

<section class="cr-section salat-times-area">
    <div class="salat-times large--width d-flex align-items-center justify-content-center">
        <div class="salat-times__inner text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h2>Time of Salat</h2>
                        <h4>Prayer Times</h4>
                        <div
                            class="salat-times__boxes d-flex flex-sm-wrap flex-wrap justify-content-md-between justify-content-center flex-md-nowrap">
                            <div class="salat-times__box">
                                <h4>fajr</h4><span>{{ Carbon\Carbon::parse($salat->fajr)->format('h:i:a') }}</span>
                            </div>
                            <div class="salat-times__box">
                                <h4>jumma</h4><span>{{ Carbon\Carbon::parse($salat->jumma)->format('h:i:a') }}</span>
                            </div>
                            <div class="salat-times__box">
                                <h4>dhuhr</h4><span>{{ Carbon\Carbon::parse($salat->dhuhr)->format('h:i:a') }}</span>
                            </div>
                            <div class="salat-times__box">
                                <h4>asr</h4><span>{{ Carbon\Carbon::parse($salat->asr)->format('h:i:a') }}</span>
                            </div>
                            <div class="salat-times__box">
                                <h4>maghrib</h4>
                                <span>{{ Carbon\Carbon::parse($salat->maghrib)->format('h:i:a') }}</span>
                            </div>
                            <div class="salat-times__box">
                                <h4>isha</h4><span>{{ Carbon\Carbon::parse($salat->isha)->format('h:i:a') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- //Salat times area -->


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

        </div>
    </div>
</section><!-- //Offer area -->
































<div class=" modal fade" id="covidModal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <img src="{{ asset('abasas/images/covid19/COVID_Rules_alert.jpg')}}" width="100%" alt="Covid 19 Alert">

        </div>
    </div>
</div>



@endsection
