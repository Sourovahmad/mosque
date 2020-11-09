@extends('includes.app')

@section('Breadcrumb')
<!-- //Breadcrumb area -->
			 <!-- Top Banner -->
			<div  class="banner-area">
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
												<a href="about-us.html" class="cr-btn cr-btn--transparent cr-btn--light cr-btn--sm"><span>Learn More</span></a>
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
										<h3>O’ Allah we believe</h3>
										<h1>That Only you can save us</h1>
										<div class="banner__content__button">
											<a href="about-us.html" class="cr-btn cr-btn--transparent cr-btn--light cr-btn--sm"><span>Learn More</span></a>
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
									<p><span class="mark">Islam</span> is the know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because</p>
									<p>know how to pursue pleasure rationally encounter consequences that are xtremely painful. Nor again is there anyone who loves or pursues or desires</p>
									<div class="about-content__bottom d-flex align-items-center flex-wrap flex-sm-nowrap">
										<div class="about-content__bottom__left">
											{{-- <p>Have you any quary?</p>
											<h3 class="body--font"><a href="callto://+00812356369">+00812 356 369</a></h3> --}}
											
										</div>
										{{-- <span>or</span> --}}
										<div class="about-content__bottom__right">
											<a href="about-us.html" class="cr-btn cr-btn--sm cr-btn--transparent cr-btn--dark"><span>Read More</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="about-images clearfix">
									<img class="wow fadeInUp" src="{{ asset('abasas/images/about/large-1.jpg')}}" alt="about image">
									<img class="wow fadeInUp" src="{{ asset('abasas/images/about/small-1.jpg')}}" alt="smalal image">
									<img class="wow fadeInUp" data-wow-delay="0.1s" src="{{ asset('abasas/images/about/small-2.jpg')}}" alt="smalal image">
								</div>
							</div>
						</div>
					</div>
				</section><!-- //About Area -->

				<!-- Pillar Of Islam -->
				<section class="cr-section islams-pillar-area ptb--120 bg--pattern zig-zag--top zig-zag--bottom">
					<div class="islams-pillars d-flex justify-content-between justify-content-lg-center align-items-center flex-wrap flex-xl-nowrap flex-xx-nowrap flex-sp-nowrap">
						<div class="islams-pillars__thumb text-lg-center wow fadeInLeft">
							<img src="{{ asset('abasas/images/pillars/pillars-thumb.png')}}" alt="pillars thumb">
						</div>
						<div class="islams-pillars__content">
							<h2>Take the proper knowledge about piller of Islam</h2>
							<p><span>Piller of islam</span> is the know how to rsue pleasure rationally encounter equ</p>
						</div>
						<div class="pillars d-flex justify-content-lg-between flex-md-wrap justify-content-md-center justify-content-sm-center justify-content-center">
							<div class="pillar__single wow fadeInRight" data-wow-delay="0s">
								<div class="pillar__single__inner">
									<img class="pillar__single__icon" src="{{ asset('abasas/images/pillars/pillar-icon-1.png')}}" alt="pillar 1">
									<h3>Kalima</h3>
								</div>
							</div>
							<div class="pillar__single wow fadeInRight" data-wow-delay="0.1s">
								<div class="pillar__single__inner">
									<img class="pillar__single__icon" src="{{ asset('abasas/images/pillars/pillar-icon-2.png')}}" alt="pillar 2">
									<h3>Salat</h3>
								</div>
							</div>
							<div class="pillar__single wow fadeInRight" data-wow-delay="0.2s">
								<div class="pillar__single__inner">
									<img class="pillar__single__icon" src="{{ asset('abasas/images/pillars/pillar-icon-3.png')}}" alt="pillar 3">
									<h3>Zakat</h3>
								</div>
							</div>
							<div class="pillar__single wow fadeInRight" data-wow-delay="0.3s">
								<div class="pillar__single__inner">
									<img class="pillar__single__icon" src="{{ asset('abasas/images/pillars/pillar-icon-4.png')}}" alt="pillar 4">
									<h3>Siam</h3>
								</div>
							</div>
							<div class="pillar__single wow fadeInRight" data-wow-delay="0.4s">
								<div class="pillar__single__inner">
									<img class="pillar__single__icon" src="{{ asset('abasas/images/pillars/pillar-icon-5.png')}}" alt="pillar 5">
									<h3>HAJJ</h3>
								</div>
							</div>
						</div>
					</div>
				</section><!-- //Pillar Of Islam -->

				<!-- Upcoming Events -->
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

										<!-- Event Single -->
										<div class="event__single">
											<div class="event__single__inner">
												<div class="event__single__thumb">
													<img src="images/event/1.jpg" alt="event thumb">
													<div class="event__single__date">
														<h3>15 December, 2017</h3>
													</div>
												</div>
												<div class="event__single__content">
													<h3><a href="event-details.html">Importance of “Hajj” in Islam</a></h3>
													<p><strong>Ramadan</strong> is the know how to pursue pleasure rationally ncountr consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of tself, because it  pain, but because occasionally </p>
													<div class="event__single__content__location">
														<p><i class="icofont icofont-institution"></i> Al-arafah masque, Old town, Paris</p>
														<p><i class="icofont icofont-wall-clock"></i> 03.00 am to 05.30pm</p>
													</div>
												</div>
											</div>
										</div><!-- //Event Single -->

										<!-- Event Single -->
										<div class="event__single">
											<div class="event__single__inner">
												<div class="event__single__thumb">
													<img src="{{ asset('abasas/images/event/2.jpg')}}" alt="event thumb">
													<div class="event__single__date">
														<h3>17 December, 2017</h3>
													</div>
												</div>
												<div class="event__single__content">
													<h3><a href="event-details.html">Importance of “Sijdah” in Islam</a></h3>
													<p><strong>Ramadan</strong> is the know how to pursue pleasure rationally ncountr consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of tself, because it  pain, but because occasionally </p>
													<div class="event__single__content__location">
														<p><i class="icofont icofont-institution"></i> Central masque, New town, Las Vegas</p>
														<p><i class="icofont icofont-wall-clock"></i> 11.00 am to 01.30pm</p>
													</div>
												</div>
											</div>
										</div><!-- //Event Single -->

										<!-- Event Single -->
										<div class="event__single">
											<div class="event__single__inner">
												<div class="event__single__thumb">
													<img src="{{ asset('abasas/images/event/3.jpg')}}" alt="event thumb">
													<div class="event__single__date">
														<h3>21 December, 2017</h3>
													</div>
												</div>
												<div class="event__single__content">
													<h3><a href="event-details.html">Preferred Foods in Islam</a></h3>
													<p><strong>Ramadan</strong> is the know how to pursue pleasure rationally ncountr consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of tself, because it  pain, but because occasionally </p>
													<div class="event__single__content__location">
														<p><i class="icofont icofont-institution"></i> Al-Madina masque, City, New York</p>
														<p><i class="icofont icofont-wall-clock"></i> 10.00 am to 12.30pm</p>
													</div>
												</div>
											</div>
										</div><!-- //Event Single -->

										<!-- Event Single -->
										<div class="event__single">
											<div class="event__single__inner">
												<div class="event__single__thumb">
													<img src="{{ asset('abasas/images/event/1.jpg')}}" alt="event thumb">
													<div class="event__single__date">
														<h3>15 December, 2017</h3>
													</div>
												</div>
												<div class="event__single__content">
													<h3><a href="event-details.html">Importance of “Hajj” in Islam</a></h3>
													<p><strong>Ramadan</strong> is the know how to pursue pleasure rationally ncountr consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of tself, because it  pain, but because occasionally </p>
													<div class="event__single__content__location">
														<p><i class="icofont icofont-institution"></i> Al-arafah masque, Old town, Paris</p>
														<p><i class="icofont icofont-wall-clock"></i> 03.00 am to 05.30pm</p>
													</div>
												</div>
											</div>
										</div><!-- //Event Single -->

										<!-- Event Single -->
										<div class="event__single">
											<div class="event__single__inner">
												<div class="event__single__thumb">
													<img src="{{ asset('abasas/images/event/2.jpg')}}" alt="event thumb">
													<div class="event__single__date">
														<h3>17 December, 2017</h3>
													</div>
												</div>
												<div class="event__single__content">
													<h3><a href="event-details.html">Importance of “Sijdah” in Islam</a></h3>
													<p><strong>Ramadan</strong> is the know how to pursue pleasure rationally ncountr consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of tself, because it  pain, but because occasionally </p>
													<div class="event__single__content__location">
														<p><i class="icofont icofont-institution"></i> Central masque, New town, Las Vegas</p>
														<p><i class="icofont icofont-wall-clock"></i> 11.00 am to 01.30pm</p>
													</div>
												</div>
											</div>
										</div><!-- //Event Single -->

										<!-- Event Single -->
										<div class="event__single">
											<div class="event__single__inner">
												<div class="event__single__thumb">
													<img src="{{ asset('abasas/images/event/3.jpg')}}" alt="event thumb">
													<div class="event__single__date">
														<h3>21 December, 2017</h3>
													</div>
												</div>
												<div class="event__single__content">
													<h3><a href="event-details.html">Preferred Foods in Islam</a></h3>
													<p><strong>Ramadan</strong> is the know how to pursue pleasure rationally ncountr consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of tself, because it  pain, but because occasionally </p>
													<div class="event__single__content__location">
														<p><i class="icofont icofont-institution"></i> Al-Madina masque, City, New York</p>
														<p><i class="icofont icofont-wall-clock"></i> 10.00 am to 12.30pm</p>
													</div>
												</div>
											</div>
										</div><!-- //Event Single -->

									</div><!-- //Event Content -->

									<!-- Event Filters -->
									<div class="event__filters">
										<div class="event-filters-active">
											<div class="event__filters__single">
												<div class="event__filters__single__inner">
													<img src="{{ asset('abasas/images/event/event-filters/1.png')}}" alt="event filters">
												</div>
											</div>
											<div class="event__filters__single">
												<div class="event__filters__single__inner">
													<img src="{{ asset('abasas/images/event/event-filters/2.png')}}" alt="event filters">
												</div>
											</div>
											<div class="event__filters__single">
												<div class="event__filters__single__inner">
													<img src="{{ asset('abasas/images/event/event-filters/3.png')}}" alt="event filters">
												</div>
											</div>
											<div class="event__filters__single">
												<div class="event__filters__single__inner">
													<img src="{{ asset('abasas/images/event/event-filters/1.png')}}" alt="event filters">
												</div>
											</div>
											<div class="event__filters__single">
												<div class="event__filters__single__inner">
													<img src="{{ asset('abasas/images/event/event-filters/2.png')}}" alt="event filters">
												</div>
											</div>
											<div class="event__filters__single">
												<div class="event__filters__single__inner">
													<img src="{{ asset('abasas/images/event/event-filters/3.png')}}" alt="event filters">
												</div>
											</div>
										</div>
									</div><!-- //Event Filters -->

								</div>
							</div>
						</div>
					</div>
				</section><!-- //Upcoming Events -->

				<!-- Activities area -->
				<section class="cr-section activities-area half--bg bg-image--1 pt--90 pb--150">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
								<div class="section-title section-title--white text-center">
									<h4>Our “Activities”</h4>
									<h2>Here is our Activities</h2>
									<p><span>Islam</span> is the know how to pursue pleasure rationally encounter consequences that are extremely painful again is there anyone who loves or pursues or desires to obtain pain of itself</p>
								</div>
							</div>
						</div>
						<div class="activities">
							<div class="row">
								<!-- Single Activity -->
								<div class="col-lg-4 col-md-6 col-sm-12 col-12">
									<figure class="activity wow fadeInLeft">
										<div class="activity__thumb">
											<a href="single-activity.html">
												<img src="images/activity/1.jpg" alt="activity image">
											</a>
										</div>
										<figcaption class="activity__content text-center">
											<h3><a href="single-activity.html">Quran Learning</a></h3>
											<p>Islam is the know how to pursuesure rationally encounter consequences  extremely painful again we love islam for peace </p>
										</figcaption>
									</figure>
								</div><!-- //Single Activity -->
								<!-- Single Activity -->
								<div class="col-lg-4 col-md-6 col-sm-12 col-12">
									<figure class="activity wow fadeInUp">
										<div class="activity__thumb">
											<a href="single-activity.html">
												<img src="images/activity/2.jpg" alt="activity image">
											</a>
										</div>
										<figcaption class="activity__content text-center">
											<h3><a href="single-activity.html">Funeral Service</a></h3>
											<p>Islam is the know how to pursuesure rationally encounter consequences  extremely painful again we love islam for peace </p>
										</figcaption>
									</figure>
								</div><!-- //Single Activity -->
								<!-- Single Activity -->
								<div class="col-lg-4 col-md-6 col-sm-12 col-12 offset-md-3 offset-lg-0 offset-0">
									<figure class="activity wow fadeInRight">
										<div class="activity__thumb">
											<a href="single-activity.html">
												<img src="images/activity/3.jpg" alt="activity image">
											</a>
										</div>
										<figcaption class="activity__content text-center">
											<h3><a href="single-activity.html">Mosque Development</a></h3>
											<p>Islam is the know how to pursuesure rationally encounter consequences  extremely painful again we love islam for peace </p>
										</figcaption>
									</figure>
								</div><!-- //Single Activity -->
							</div>
						</div>
					</div>
				</section><!-- //Activities area -->

				<!-- Salat times area -->
				<section class="cr-section salat-times-area bg--pattern bg--pattern zig-zag--top zig-zag--bottom">
					<div class="row no-gutters salat-times-wrap align-items-center">
						<div class="col-lg-12 col-xl-5">
							<div class="salat-times d-flex align-items-center justify-content-center">
								<div class="salat-times__inner text-center">
									<h2>Time of Salat</h2>
									<h4>Prayer Times</h4>
									<div class="salat-times__boxes d-flex flex-sm-wrap flex-wrap justify-content-center flex-md-nowrap">
										<div class="salat-times__box">
											<h4>Fajr</h4>
											<span>[{timeCalc.timeDawn}]</span>
										</div>
										<div class="salat-times__box">
											<h4>Dhuhr</h4>
											<span>[{timeCalc.timeZuhr}]</span>
										</div>
										<div class="salat-times__box">
											<h4>Asr</h4>
											<span>[{timeCalc.timeAsr}]</span>
										</div>
										<div class="salat-times__box">
											<h4>Maghrib</h4>
											<span><span class="time-sunset"></span></span>
										</div>
										<div class="salat-times__box">
											<h4>Isha</h4>
											<span>[{timeCalc.timeIsha}]</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-7">
							<div class="donation-wantend text-center ptb--130">
								<h2>Donation wanted for...</h2>
								<h5>Mosque development & kid’s school</h5>
								<p>Islam is the know how to pursue pleasure rationally encounter consequences that are extremely painful again is there anyone who loves or pursues or desires to obtain pain of itself</p>
								<div class="donation-wantend__form">
									<form action="#">
										<input type="text" placeholder="Your amount here">
										<button class="cr-btn cr-btn--black"><span>DONATE NOW</span></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section><!-- //Salat times area -->

				<!-- Team Area -->
				<section class="cr-section team-area ptb--150 bg--white flower--left-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
								<div class="section-title text-center">
									<h4>Our “Team”</h4>
									<h2>Meet our Organizer</h2>
									<p>Islam is the know how to pursue pleasure rationally encounter consequences that are extremely painful again is there anyone who loves or pursues or desires to obtain pain of itself</p>
								</div>
							</div>
						</div>
						<div class="row">
							<!-- Single Team -->
							<div class="col-lg-6 col-md-6 col-xl-3">
								<figure class="team-member wow fadeInUp">
									<div class="team-member__thumb">
										<div class="hexagon">
											<div class="hexagon__inner1">
												<div class="hexagon__inner2">
													<img src="images/team/1.jpg" alt="team member 1">
												</div>
											</div>
										</div>
									</div>
									<figcaption class="team-member__content">
										<h3>Sawad Bin Maksud</h3>
										<h5>President</h5>
									</figcaption>
								</figure>
							</div><!-- //Single Team -->
							<!-- Single Team -->
							<div class="col-lg-6 col-md-6 col-xl-3">
								<figure class="team-member wow fadeInUp">
									<div class="team-member__thumb">
										<div class="hexagon">
											<div class="hexagon__inner1">
												<div class="hexagon__inner2">
													<img src="images/team/2.jpg" alt="team member 1">
												</div>
											</div>
										</div>
									</div>
									<figcaption class="team-member__content">
										<h3>Nahiyan Bin Momen</h3>
										<h5>Event Organizer</h5>
									</figcaption>
								</figure>
							</div><!-- //Single Team -->
							<!-- Single Team -->
							<div class="col-lg-6 col-md-6 col-xl-3">
								<figure class="team-member wow fadeInUp">
									<div class="team-member__thumb">
										<div class="hexagon">
											<div class="hexagon__inner1">
												<div class="hexagon__inner2">
													<img src="images/team/3.jpg" alt="team member 1">
												</div>
											</div>
										</div>
									</div>
									<figcaption class="team-member__content">
										<h3>Julfiker Amin Ali</h3>
										<h5>Quran Teacher</h5>
									</figcaption>
								</figure>
							</div><!-- //Single Team -->
							<!-- Single Team -->
							<div class="col-lg-6 col-md-6 col-xl-3">
								<figure class="team-member wow fadeInUp">
									<div class="team-member__thumb">
										<div class="hexagon">
											<div class="hexagon__inner1">
												<div class="hexagon__inner2">
													<img src="images/team/4.jpg" alt="team member 1">
												</div>
											</div>
										</div>
									</div>
									<figcaption class="team-member__content">
										<h3>Hasib Bin Asfaque</h3>
										<h5>Imam</h5>
									</figcaption>
								</figure>
							</div><!-- //Single Team -->
						</div>
					</div>
				</section><!-- //Team Area -->

				<!-- Offer area -->
				<section class="cr-section offer-area ptb--70 bg--pattern zig-zag--top zig-zag--bottom">
					<div class="container">
						<div class="row">
							<div class="col-xl-10 offset-xl-1 col-lg-12 offset-lg-0 col-md-12 offset-0 col-12">
								<div class="offer d-flex justify-content-between align-items-center flex-wrap flex-sm-nowrap">
									<div class="offer__content text-center order-2 order-sm-1">
										<img src="images/others-png/kaba.png" alt="kaba">
										<h2>Special Discount on...</h2>
										<h4>Hajj & Umrah package </h4>
										<a href="#" class="cr-btn cr-btn--transparent"><span>Contact Us</span></a>
									</div>
									<div class="offer__thumb text-lg-center order-1 order-sm-2">
										<img class="wow fadeInRight" src="images/others-png/offer-thumb.png" alt="offer thumb">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section><!-- //Offer area -->

				<!-- Blog Area -->
				<section class="cr-section blog-area pt--150 pb--140 bg--white flower--right-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
								<div class="section-title text-center">
									<h4>From “Blog”</h4>
									<h2>Latest Blog Post</h2>
									<p>Islam is the know how to pursue pleasure rationally encounter consequences that are extremely painful again is there anyone who loves or pursues or desires to obtain pain of itself</p>
								</div>
							</div>
						</div>
						<div class="row">

							<!-- Start Single Blog -->
							<div class="col-lg-6 col-md-6 col-xl-3">
								<article class="blog wow fadeInUp">
									<div class="blog__thumb">
										<a href="blog-details.html">
											<img src="images/blog/1.jpg" alt="single blog thumb">
										</a>
									</div>
									<div class="blog__content">
										<div class="blog__content__meta">
											<p>December 20, 2017 - <a href="blogs.html">Afser</a></p>
										</div>
										<h4 class="blog-title"><a href="blog-details.html">Islam is the only one way for peace </a></h4>
										<p>Islam is the know how to pursuesure nally encounter consequences  extremely </p>
										<a href="blog-details.html" class="cr-readmore">Read</a>
									</div>
								</article>
							</div><!-- //Start Single Blog -->

							<!-- Start Single Blog -->
							<div class="col-lg-6 col-md-6 col-xl-3">
								<article class="blog wow fadeInUp">
									<div class="blog__thumb">
										<a href="blog-details.html">
											<img src="images/blog/2.jpg" alt="single blog thumb">
										</a>
									</div>
									<div class="blog__content">
										<div class="blog__content__meta">
											<p>December 18, 2017 - <a href="blogs.html">Julfiqar</a></p>
										</div>
										<h4 class="blog-title"><a href="blog-details.html">Salat can help us to move closer to Allah </a></h4>
										<p>Islam is the know how to pursuesure nally encounter consequences  extremely </p>
										<a href="blog-details.html" class="cr-readmore">Read</a>
									</div>
								</article>
							</div><!-- //Start Single Blog -->

							<!-- Start Single Blog -->
							<div class="col-lg-6 col-md-6 col-xl-3">
								<article class="blog wow fadeInUp">
									<div class="blog__thumb">
										<a href="blog-details.html">
											<img src="images/blog/3.jpg" alt="single blog thumb">
										</a>
									</div>
									<div class="blog__content">
										<div class="blog__content__meta">
											<p>December 15, 2017 - <a href="blogs.html">Iftekhar</a></p>
										</div>
										<h4 class="blog-title"><a href="blog-details.html">Ramadan teach us how to realize fasting</a></h4>
										<p>Islam is the know how to pursuesure nally encounter consequences  extremely </p>
										<a href="blog-details.html" class="cr-readmore">Read</a>
									</div>
								</article>
							</div><!-- //Start Single Blog -->

							<!-- Start Single Blog -->
							<div class="col-lg-6 col-md-6 col-xl-3">
								<article class="blog wow fadeInUp">
									<div class="blog__thumb">
										<a href="blog-details.html">
											<img src="images/blog/4.jpg" alt="single blog thumb">
										</a>
									</div>
									<div class="blog__content">
										<div class="blog__content__meta">
											<p>December 12, 2017 - <a href="blogs.html">Momen</a></p>
										</div>
										<h4 class="blog-title"><a href="blog-details.html">Learn about Islam, It is very simple & realistic</a></h4>
										<p>Islam is the know how to pursuesure nally encounter consequences  extremely </p>
										<a href="blog-details.html" class="cr-readmore">Read</a>
									</div>
								</article>
							</div><!-- //Start Single Blog -->

						</div>
					</div>
				</section><!-- //Blog Area -->


@endsection