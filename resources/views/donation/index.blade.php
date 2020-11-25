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
									
											<h3>“Those who spend in charity will be richly rewarded.” [Quran 75:10]</h3>
											
											<div class="banner__content__button">
												<a href="{{ route('donations') }}#donate" class="cr-btn cr-btn--transparent cr-btn--light cr-btn--sm"><span>Donate Now</span></a>
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

				<!-- Team Area -->
				<section class="cr-section team-area ptb--150 bg--white flower--left-bottom">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10  col-md-10 col-12 ">
								<div class="section-title text-center">
									<h2>REMEMBER ALLAH</h2>
									<h5>Ali bin Abu Talib said</h5>
									<div>
                                        حَدَّثَنَا الْعَبَّاسُ بْنُ عُثْمَانَ الدِّمَشْقِيُّ، حَدَّثَنَا الْوَلِيدُ بْنُ مُسْلِمٍ، عَنِ ابْنِ لَهِيعَةَ، حَدَّثَنِي أَبُو الأَسْوَدِ، عَنْ عُرْوَةَ، عَنْ عَلِيِّ بْنِ أَبِي طَالِبٍ، قَالَ قَالَ رَسُولُ اللَّهِ ـ صلى الله عليه وسلم ـ ‏ "‏ مَنْ بَنَى لِلَّهِ مَسْجِدًا مِنْ مَالِهِ بَنَى اللَّهُ لَهُ بَيْتًا فِي الْجَنَّةِ ‏"‏ ‏.‏
                                    </div>
									<p>The Messenger of Allah said: 'Whoever builds a mosque for the sake of Allah (from his own wealth), Allah will build a house for him in Paradise'
                                    </p>
                                        <a href="{{ route('donations') }}#donate" class="cr-btn cr-btn--transparent  cr-btn--sm"><span>Donate Now</span></a>
                                    
								</div>
							</div>
						</div>
					</div>
				</section><!-- //Team Area -->


    <!-- Donnation Form -->
    <div class="pg-donation-area ptb--150 bg-image--5 border" id="donate" >
        <div class="container">
            <form action="{{ route('checkout') }}" method="get" id="pg-donation" class="pg-donation">
                
                    <div class="row">
                        <div class="col-lg-6">
                            <aside class="pg-donation__personalinfo">
                                <h4 class="pg-dontation__title">Personal Information</h4>
                                <div class="single-input">
                                    <label for="first_name">First Name*</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" required>
                                </div>
                                <div class="single-input">
                                    <label for="last_name">Last Name*</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control">
                                </div>
                                
                                <div class="single-input">
                                    <label for="email">Email*</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>

                                <div class="single-input">
                                    <label for="cel_phone">Cell Phone*</label>
                                    <input type="tel" name="cel_phone" id="cel_phone" class="form-control" required >
                                </div>
                                <div class="single-input">
                                    <label for="home_phone">Home Phone</label>
                                    <input type="tel" name="home_phone" id="home_phone" class="form-control">
                                </div>
                                <div class="single-input">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control">
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-6">
                            <aside class="pg-donation__bankinfo">
                                <h4 class="pg-dontation__title">Donation Information</h4>
                                
                                <div class="single-input">
                                    <label for="amount">Donation Amount (USD)*</label>
                                    <input type="number" name="amount" id="amount" class="form-control" required>
                                </div>
                                <div class="single-input donation-type">
                                    <p>
                                        <input type="radio"   value="Onetime" class="text-dark"
                                             name="donation_type" id="pg-donation-type-onetime" checked>
                                        <label for="pg-donation-type-onetime" class="text-dark">Onetime</label>
                                    </p>
                                    <p>
                                        <input type="radio"   value="Monthly" class="text-dark"
                                             name="donation_type" id="pg-donation-type-monthly">
                                        <label for="pg-donation-type-monthly" class="text-dark">Monthly</label>
                                    </p>
                                    <p>
                                        <input type="radio"   value="General" class="text-dark"
                                             name="donation_type" id="pg-donation-type-general">
                                        <label for="pg-donation-type-general" class="text-dark">General</label>
                                    </p>
                                   
                                    <p>
                                        <input type="radio"   value="Zakat/Fitrah" class="text-dark"
                                             name="donation_type" id="pg-donation-type-zakat">
                                        <label for="pg-donation-type-zakat" class="text-dark">Zakat/Fitrah</label>
                                    </p>
                                   
                                  
                                    <p>
                                        <input type="radio"   value="Life Member ($1000)" class="text-dark"
                                             name="donation_type" id="pg-donation-type-lifeMember">
                                        <label for="pg-donation-type-lifeMember" class="text-dark">Life Member ($1000)</label>
                                    </p>
                                    <p>
                                        <input type="radio"   value="Sadaqah" class="text-dark"
                                             name="donation_type" id="pg-donation-type-sadaqah">
                                        <label for="pg-donation-type-sadaqah" class="text-dark">Sadaqah</label>
                                    </p>
                                    <p>
                                        <input type="radio"   value="Quard-e-Hasanah" class="text-dark"
                                             name="donation_type" id="pg-donation-type-quard-e-hasanah">
                                        <label for="pg-donation-type-quard-e-hasanah" class="text-dark">Quard-e-Hasanah</label>
                                    </p>
                                    <p>
                                        <input type="radio"   value="Others" class="text-dark"
                                             name="donation_type" id="pg-donation-type-others">
                                        <label for="pg-donation-type-others" class="text-dark">Others</label>
                                    </p>
                                </div>


                                <div class="single-input">
                                    <label for="card_number">Card number*</label>
                                    <input type="text" name="card_number" id="card_number" class="form-control" required>
                                </div>
                                <div class="single-input">
                                    <label for="expiry_month">Expire Date</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <select name="expiry_month" id="expiry_month" required>
                                                <option value="january">January</option>
                                                <option value="february">February</option>
                                                <option value="march">March</option>
                                                <option value="april">April</option>
                                                <option value="june">June</option>
                                                <option value="july">July</option>
                                                <option value="august">August</option>
                                                <option value="september">September</option>
                                                <option value="november">November</option>
                                                <option value="december">December</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                           
                                            <input type="number" name="expiry_year" id="expiry_year" class="form-control" placeholder="Year" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-input">
                                            <label for="security">Security Code</label>
                                            <input type="text" name="security" id="security" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-input">
                                            <label for="zipcode">Zip Code</label>
                                            <input type="text" name="zipcode" id="zipcode" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-input">
                                    <button type="submit">Donate Now</button>
                                </div>
                            </aside>
                        </div>
                    </div>

            </form>
        </div>
    </div><!-- //Donnation Form -->


@endsection
