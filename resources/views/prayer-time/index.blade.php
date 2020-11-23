@extends('includes.app')

@section('Breadcrumb')
<!-- Top Banner -->


			<!-- Breadcrumb area -->
			<section class="cr-section breadcrumb-area" data-black-overlay="2">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="cr-breadcrumb text-center">
								<h2 class="cr-breadcrumb__title">PRAYING  TIME</h2>
								<div class="cr-breadcrumb__tree text-left text-md-left text-center">
									<ul>
										<li><a href="{{ route('home') }}">Home</a></li>
										<li>Praying Time</li>
										
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



<!-- About Area -->
<section class="about-area ptb--150 zig-zag--bottom bg--pattern flower--left-top  flower--right-bottom ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <h2> Masjid Mission Center <strong>“MMC”</strong></h2>
                    <h4>87-26 175th St, Queens, NY 11432, United States</h4>
                    <p> 
						For Your convenience and in accordance with the advice of the NYC Officials to limit crowds. Masjid Mission Center will have the following</p>
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


{{-- 
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
                                <div style="font-weight: 800; font-size:22px;color:#fff;">Fajr </div>
                                <span>{{ Carbon\Carbon::parse($salat->fajr)->format('h:i:a') }}</span>
                            </div>

                            {{-- <div class="salat-times__box">
                                <div style="font-weight: 800; font-size:20px;color:#fff;">Jumma </div>
                                <span>{{ Carbon\Carbon::parse($salat->jumma)->format('h:i:a') }}</span>
                            </div> 


                            <div class="salat-times__box">
                                <div style="font-weight: 800; font-size:20px;color:#fff;">Dhuhr </div>
                                <span>{{ Carbon\Carbon::parse($salat->dhuhr)->format('h:i:a') }}</span>
                            </div>

                            <div class="salat-times__box">
                                <div style="font-weight: 800; font-size:22px;color:#fff;">Asr </div>
                                <span>{{ Carbon\Carbon::parse($salat->asr)->format('h:i:a') }}</span>
                            </div>

                            <div class="salat-times__box">
                                <div style="font-weight: 800; font-size:20px;color:#fff;">Maghrib </div>
                                <span>{{ Carbon\Carbon::parse($salat->maghrib)->format('h:i:a') }}</span>
                            </div>

                            <div class="salat-times__box">
                                <div style="font-weight: 800; font-size:22px;color:#fff;">Isha </div>
                                <span>{{ Carbon\Carbon::parse($salat->isha)->format('h:i:a') }}</span>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- //Salat times area -->
 --}}

		<!-- Salat times area -->
		<section class="cr-section salat-times-area  ">
			<div class="row no-gutters salat-times-wrap align-items-center">
				<div class="col-lg-12 col-xl-5">
					<div class="salat-times d-flex align-items-center justify-content-center">
						<div class="salat-times__inner text-center">
							<h2>Time of Salat</h2>
							<h4>{{ Carbon\Carbon::today()->format('d : M : Y') }}</h4>
							<div class="salat-times__boxes d-flex flex-sm-wrap flex-wrap justify-content-center flex-md-nowrap">
								<div class="salat-times__box">
									<h4>Fajr</h4>
									<span>{{ Carbon\Carbon::parse($salat->fajr)->format('h:i:a') }}</span>
								</div>
								<div class="salat-times__box">
									<h4>Dhuhr</h4>
									<span>{{ Carbon\Carbon::parse($salat->dhuhr)->format('h:i:a') }}</span>
								</div>
								<div class="salat-times__box">
									<h4>Asr</h4>
									<span>{{ Carbon\Carbon::parse($salat->asr)->format('h:i:a') }}</span>
								</div>
								<div class="salat-times__box">
									<h4>Maghrib</h4>
									<span>{{ Carbon\Carbon::parse($salat->maghrib)->format('h:i:a') }}</span>
								</div>
								<div class="salat-times__box">
									<h4>Isha</h4>
									<span>{{ Carbon\Carbon::parse($salat->isha)->format('h:i:a') }}</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-xl-7 ">
					<div class="donation-wantend text-center ptb--130">
						<h2>COVID-19 (Jummah Sessions)</h2>
						{{-- <h5>Please Pray your Sunnah Prayers at home.</h5> --}}
						<p style="font-size: 110%">​For Your convenience and in accordance with the advice of the NYC Officials to limit crowds. Masjid Mission Center will have the following.</p>
					
					<div class="text-left font-weight-bold">
					
						<hr>
						<ul>
							<li>1st. 12:30PM Khutbah</li>
							<li>2nd. 1:00PM Khutbah</li>
							<li>3rd. 1:30PM Khutbah</li>
						</ul>
					</div>

						<p class="text-danger text-left"> * Please Pray your Sunnah Prayers at home.</p>
					</div>
				</div>
			</div>
		</section><!-- //Salat times area -->






<section style="background-color: lavender">

	<div class="row">
		<div class="col-md-9 col-sm-12 pl-4 pt-4">
			<div>
				<h1 class="text-center font-weight-bold p-4" style="font-weight: 800">Praying Time of {{ Carbon\Carbon:: now()->format('F, Y') }}</h1>
			</div>
			<div class="pl-4">
				@if (!is_null($prayerTime))
				<img src="{{ asset($prayerTime->image->url) }}" alt="Praying Time" >
				@else 
				<p>No Picture Found</p>
				@endif
				
			</div>
			
		</div>
		<div class="col-md-3 col-sm-12 pt-4 pr-4 ">
			<div >
				<h3 class="text-center font-weight-bold">Notes</h3>
			</div>
			<div class="pr-4">
				<ul>
					<li class="text-justify">To get the maximum Friday Prayer reward, you are required to come before the khutbah and to not talk during the khutbah .</li>
					<li class="text-justify">Please turn-off your cellphones, do not jaywalk, and do not block anyone’s driveway/car.</li>
					<li class="text-justify">If you come late, then there is plenty of space on Mosque.</li>
					<li class="text-justify">Muslims take off their shoes every time they enter a mosque. They expect visitors to follow their lead and show the same respect when they enter a mosque.</li>
					<li class="text-justify">Muslims believe that every mosque is a house of God. In these houses they pray, read the Holy Qur’an, take lessons about Islam, tell morals from the stories of the prophet Muhammad (Peace Be Upon Him) and ask about each others’ wellbeing.</li>

				</ul>
			</div>


		</div>
		
	</div>

</section>
	





@endsection
