@extends('includes.app')

@section('Breadcrumb')
<!-- Top Banner -->

<!-- Breadcrumb area -->
<section class="cr-section breadcrumb-area" data-black-overlay="7">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="cr-breadcrumb text-center">
					<h2 class="cr-breadcrumb__title">About us</h2>
					<div class="cr-breadcrumb__tree text-left text-md-left text-center">
						<ul>
							<li><a href="{{ route('home') }}">Home</a></li>
							<li>About</li>
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

				<!-- About Details Area -->
				<div class="cr-section about-details-area ptb--120 bg--pattern">
					<div class="container">
						<div class="about-details">
							<div class="row">
								<div class="col-lg-5 col-md-8 offset-0 offset-md-2 offset-lg-0">
									<!-- About Details Thumb -->
									<div class="about-details__thumb video--trigger">
										<a class="video--trigger" href="https://www.youtube.com/watch?v=XwVGF2mhLIg">
											<img src="{{ asset('abasas/images/about/about-details-thumb.jpg') }}" alt="about details thumb">
										</a>
									</div><!-- //About Details Thumb -->
								</div>
								<div class="col-lg-7">
									<!-- About Details Content -->
									<div class="about-details__content">
										<div class="row">
											<div class="col-lg-6 col-md-6">
												<div class="single-block">
													<h4 class="single-block__title">Our Mission</h4>
													<p>Islam is the know how to pursuesure rationally encounter consequences  extremely painful again we love islam for peace porro quisquam est, qui dolorem ipsum quia dolor sit </p>
												</div>
												<div class="single-block">
													<h4 class="single-block__title">Our Vision</h4>
													<p>Islam is the know how to pursuesure rationally encounter consequences  extremely painful again we love islam for peace porro quisquam est, qui dolorem ipsum quia dolor sit </p>
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="single-block">
													<h4 class="single-block__title">Our History</h4>
													<p>Islam is the know how to pursuesure rationally encounter consequences  extremely painful again we love islam for peace porro quisquam est, qui dolorem ipsum quia dolor sit </p>
													<p>Islam is the know how to pursuesure rationally encounter consequences  extremely painful to pursuesure rationally encounter</p>
												</div>
											</div>
										</div>
									</div><!-- //About Details Content -->
								</div>
							</div>
						</div>
					</div>
				</div><!-- //About Details Area -->



                				<!-- Team Area -->
				<section class="cr-section team-area ptb--150 bg--white flower--right-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
								<div class="section-title text-center">
									<h4>Our “Committe”</h4>
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
													<img src="{{ asset('abasas/images/team/1.jpg') }}" alt="team member 1">
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
													<img src="{{ asset('abasas/images/team/2.jpg') }}" alt="team member 1">
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
													<img src="{{ asset('abasas/images/team/3.jpg') }}" alt="team member 1">
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
													<img src="{{ asset('abasas/images/team/4.jpg') }}" alt="team member 1">
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
				</section>
@endsection