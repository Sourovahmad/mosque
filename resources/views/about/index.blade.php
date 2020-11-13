@extends('includes.app')

@section('Breadcrumb')
    <!-- Top Banner -->

    
			 <!-- Top Banner -->
			<div  class="banner-area">
				<div class="banner bg-image--6 banner-text-slide slider-arrow--style1 slide-animate-text">

						<!-- Single Banner -->
						<div class="banner__single fullscreen d-flex align-items-center" data-black-overlay="6">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="banner__content text-center">	
                                            <img src="{{asset('abasas/images/others-png/bismilla-word.png')}}" alt="bismillah word">
									
											<h3>
                                                Who we are Masjid Mission Center ( MMC ) is a 501 ( c ) religious organization in Jamaica NY - a community of believers adhering to the Qur'an and the life traditions of Prophet Muhammad (Peace and Blessing Be Upon Him) </h3>
											
											<div class="banner__content__button">
												<a href="{{ route('donations.index') }}#donate" class="cr-btn cr-btn--transparent cr-btn--light cr-btn--sm"><span>Donate Now</span></a>
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

    <!-- About Details Area -->
    <div class="cr-section about-details-area ptb--120 bg--pattern">
        <div class="container">
            <div class="about-details">
                <div class="row">
                    {{-- <div class="col-lg-5 col-md-8 offset-0 offset-md-2 offset-lg-0">
                        <!-- About Details Thumb -->
                        <div class="about-details__thumb video--trigger">
                            <a class="video--trigger" href="https://www.youtube.com/watch?v=XwVGF2mhLIg">
                                <img src="{{ asset('abasas/images/about/home.jpg') }}"
                                    alt="about details thumb">
                            </a>
                        </div><!-- //About Details Thumb -->
                    </div> --}}
                    <div class="col-lg-12">
                        <!-- About Details Content -->
                        <div class="about-details__content">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-block">
                                        <h4 class="single-block__title"> Mission and Our Vision</h4>
                                        <p> Masjid Mission Center ( MMC ) is committed to the Islamic way of life based on
                                            the Qur'an and life example of Prophet Muhammad. We serve as a center for
                                            religious development, social, educational, economic, and cultural enrichment.
                                            We believe in the Oneness of God and the oneness of humanity. We are committed
                                            to promoting excellence in community life and human dignity throughout our
                                            neighborhoods, city, country, and global community.</p>
                                    </div>

                                </div>
                               
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-block">
                                        <h4 class="single-block__title">Activites And Services</h4>
                                        <ul>
                                            <li>5 Times Daily Salat & Friday Jummah </li>
                                            <li>Islamic Seminars & Lectures </li>
                                            <li> Weekly Bayan (Lecture) </li>
                                            <li>Weekend Islamic Studies Courses </li>
                                            <li> Islamic Library </li>
                                            <li>Conducting Nikah ( Marriage ) Ceremonies </li>
                                            <li>Distribution of Qurbani meat and zakat ul - Fitr ( charity ) to the needy
                                            </li>
                                            <li> Collection of Zakat & Sadaqah to distribute to the needy</li>
                                            <li>Hifzul - Quran ( Memorization of the Glorious Quraan </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6 col-md-6">
                                    <div class="single-block">
                                        <h4 class="single-block__title">Who We Are</h4>
                                        <p>Who we are Masjid Mission Center ( MMC ) is a 501 ( c ) religious organization in
                                            Jamaica NY - a community of believers adhering to the Qur'an and the life
                                            traditions of Prophet Muhammad (Peace and Blessing Be Upon Him)</p>
                                    </div>
                                </div> --}}



                            </div>
                        </div><!-- //About Details Content -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- //About Details Area -->
      

   


 {{-- Rules and Regulation Area  --}}


<section style="background-color: lavender">
    <div>
        <h3></h3>
    </div>
    <div class="row">

    <div class="col-md-5 col-sm-12 p-4">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
          </div>
    </div>
    <div class="col-md-7 col-sm-12 p-4">
        
         <div class="tab-content" id="v-pills-tabContent">
           <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
           <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
           <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
           <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
         </div>
       
       </div>
       
    </div>
</section>










        <div class="title ">

            <h1 class=" font-weight-bold pt-4 text-center pt-4 "> Rules And Regulation</h1>

        </div>
        <div class="row pl-4">


            <div class="col-md-6 col-sm-12 pt-4">
                <p class="pl-4 pt-4 pr-4">
                    in order To ensure the smooth operation of Masjid Mission Center ( MMC ) and to better serve the
                    community, the following policy has been formulated and will be implemented regarding non - MMC / Masjid
                    sponsored programs, announcements, events, and activities
                </p>

                <p class="pl-4 pt-4 pr-4">
                    This policy is subject to change without notice. Please see a member of the Masjid Committee of email
                    masjid pncenterusögmail.com for any questions or concerns.
                </p>
  <div class="secendtitle">

	<h4 class="text-left pt-4 font-weight-bold">FUNDRAISING</h4>

	

		<ul>

			<li> All fund raising requests should be submitted four ( 4 ) months prior to the event</li>
			<li>  The following documents need to be submitted at the time of the request
				<ul>
					<li> RS tax exemption certificate</li>
					<li>Certificate of incorporation in home state</li>
					<li> Signed letter of intent for fundraising on organization's letter head</li>
				</ul>
			
			
			</li>
			<li> Receipt of funds collected with exact dollar amount should be signed and mailed promptly after fundraising event<li>
			<li>Failure to comply with one or all of these regulations may result in consequences up to and including forfeiture of funds collected</li>

		</ul>

		<div class="thirdtitle">
			<h4 class="text-left pt-4 font-weight-bold">ANNOUNCEMENT</h4>

			<ul>

				<li>  Friday announcements
					<ul>
						<li>All announcement requests must be received in writing before Thursday 5:00 p.m.</li>
						<li> Friday announcements may be made by the Imam and/or designated member of the Masjid Committee</li>
					</ul>
				 </li>

				 
				<li> General announcements
					<ul>
						<li>Emergency announcements like newborn, hospitalization, accident, death, and request for du'a can be made only with the permission of Imam or a member of the Masjid Committee</li>
						<li>  Other announcements apart from those stated above require prior approval from the Masjid committee</li>
					</ul>
				 </li>
    <h4 class="text-left pt-4 font-weight-bold"> POSTING NEWS OR ADS ON WEB</h4>
				 
					<ul>
						<li>Approval of Imam or a member of the Masjid committee</li>
						<li> Fees may apply</li>
					</ul>
			
			</ul>


			
			<h4 class="text-left pt-4 font-weight-bold">ORGANIZED PROGRAMS / EVENTS</h4>
			<p class="pl-4 pt-4 pr-4">
				All program/event requests should be made at least four ( 4 ) weeks in advance <br>

				Those requests will require review and approval of relevant program information ( eg, program summary, presentation, etc by The Masjid Committee and' or Imam. Programs may be recorded and will remain the property of MMC. By agreeing to conduct the program on masjid property, the requester agrees to these conditions and will abide by all masjid policies, rules, and regulations <br>


				The approved individual or group responsible for conducting the program will follow the general guidelines of the masjid and should maintain Islamic conduct

			</p>
     <ul> 
		   <h5> Approved programs include:</h5>
		   <li> Islamic or religious programs</li>
		   <li>Community or general affairs</li>
		   <li>Dinner or lunch programs</li>

	 </ul>

		</div>

  </div>

			</div>
			
            <div class="col-md-6 col-sm-12">
 <p>
	Any program Volating masid policy . Islarnic law , and / or applicable local , state , and / or federal laws will not be permitted . Programs should also meet requirements for IRS code Section 501 c ) ( 3 ) for churches of religious houses of worship
 </p>
			
 <div class="right_secend_title">

	<h4 class="text-left pt-4 font-weight-bold"> ADDITIONAL REGULATIONS</h4>
	<ul>
		<li>Any activity, program , group , or personal activity violating besic Islamic law ( Sunni ) is strictly prohibited and will be canceled with or without notice . Any interpretation of religious matters will be referred to the Imam </li>
		<li> All Islamic religious matters require review and approval of Imam of Masjid Mission Center ( MMC ) </li>
		<li>Any activity , program by person or group that may harm , threaten or endanger any other individual group will not be tolerated . Such an Individual will be appropriately reprimanded up to and including expulsion from the masjid </li>
		<li> Any illegal activity by any individual or group will be reported immediately to law enforcement </li>
		<li>No masjid property can be borrowed , moved , or rearranged without prior approval from a member of the Masjid Committee of Imam</li>
		<li> No personal items should be left outside or inside the masjid without prior approval from a member of the Masjid Committee or Imam</li>
		<li>Sleepover in the masjid including Itikaf requires awareness all relevant rules and regulations and therefore must be pre - approved by a member of the Masjid Committee and / or Imam Requests will not be granted without an advanced request. </li>
		<li>Vehicles should be parked in a designated parking space . Overnight parking requires approval of any member of the Masjid Committee. Vehicles parked inappropriately and parked overnight without prior approval will be towed at owners expense</li>
		<li>The requestor assumes full responsibility for the liability of any statement and / or program carried out during the event and / or by affifiated group member . Opinions expressed there are not necessarily endorsed by MMC </li>
		<li class="font-weight:bold"> <span class=""> CELL PHONES AND PAGERS MUST</span>   be turned off or switched to vibrate during the 5 Daily Prayers and Jummah Prayer. Please show your respect for Allah ( swt ) and those around you</li>
		<li> <span class="font-weight-bold">  SHOES</span>  are not permitted on the carpeted area an MUST be removed and placed in shoe racks upon entry in the Masjid . Shoes left on the tiled area can be a safety hazard</li>
		<li> <span class="font-weight-bold">YOUNG CHILDREN</span> are encouraged at the Masild but, they MUST be next to their parents during Prayer. Or any other actions consider unsafe or distracting to others </li>
		<li>Buying and selling of any kind in the Masjid shall be barred </li>
		<li> When anyone finds others dong something wrong , he / she should ask them not to do quietly and softly . Everyone shall avoid insulting others openly , or rebuking others , or quarreling with others</li>
		<li> Any complaints , suggestions , disputes or disagreements shall be brought to attention of the Masjid Committee -MMC Executive Committee</li>
	
	
	
	
	</ul>
 </div>


            </div>
        </div>
    </div>






				
				<!-- Offer area -->
				<section id="gallery" class="cr-section offer-area ptb--70 bg--pattern zig-zag--top zig-zag--bottom">
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
							
							<a mt-4 href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mt-4">
							  <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid rounded">
							</a>
							<a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mt-4">
							  <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid rounded">
							</a>
							<a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mt-4">
							  <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid rounded">
							</a>
							<a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mt-4">
							  <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid rounded">
							</a>
							<a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mt-4">
							  <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid rounded">
							</a>
							<a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mt-4">
							  <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid rounded">
							</a>
						  </div>
					</div>
				</section><!-- //Offer area -->




    {{-- <!-- Team Area -->
    <section class="cr-section team-area ptb--150 bg--white flower--right-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
                    <div class="section-title text-center">
                        <h4>Our “Committe”</h4>
                        <h2>Meet our Organizer</h2>
                        <p>Islam is the know how to pursue pleasure rationally encounter consequences that are extremely
                            painful again is there anyone who loves or pursues or desires to obtain pain of itself</p>
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
    </section> --}}



@endsection
