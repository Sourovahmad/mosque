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
            <form action="{{ route('testSession') }}" method="post" id="pgDonation" class="pg-donation">
                @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <aside class="pg-donation__personalinfo">
                                <h4 class="pg-dontation__title">Personal Information</h4>
                             
                                
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                     
                                        <div class="single-input">
                                            <label for="first_name">First Name*</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" required>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        
                                        <div class="single-input">
                                            <label for="last_name">Last Name*</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control">
                                        </div>

                                    </div>
                                </div>


                             
                                
                            

                                <div class="single-input">
                                    <label for="cell_phone">Cell Phone*</label>
                                    <input type="tel" name="cell_phone" id="cell_phone" class="form-control" required >
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
                                    <button type="button" id="checkout-button">Donate Now</button>
                                </div>
                            </aside>
                        </div>
                    </div>

            </form>
        </div>
    </div><!-- //Donnation Form -->


@endsection

@section('customJS')
<script type="text/javascript">
    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe("pk_test_51Hl3M4LtX3QocVix8Kq6e56OyI5ANiTi2mHpvIi24zVe6RTG3HoVpWgN7NZ8sCRyyR0ONtJfradWieV2MPQATH9P00IEC0qlfT");
    var checkoutButton = document.getElementById("checkout-button");

    checkoutButton.addEventListener("click", function () {

        var frm= $("#pgDonation");
        console.log(frm)
       
        var act = $("#pgDonation").attr('action');            
        console.log("---------- action " + act);
     
        $.ajax({
            type: 'post',
            url: act,
            data:frm.serialize(),
            success: function (data) {
                console.log(data);
                return stripe.redirectToCheckout({ sessionId: data.id });
                // viewSupplierData(supplier);
            },
            error: function (data) {
                alert("Failed payment ..... Try Again !!!!!!!!!!!")
                console.log('An error occurred.');
                console.log(data);
            },
        });

        
        
    //   fetch("{{ route('testSession') }}", {
    //     method: "POST",
    //   })
    //     .then(function (response) {
    //       return response.json();
    //     })
    //     .then(function (session) {
    //       return stripe.redirectToCheckout({ sessionId: 'session.id' });
    //     })
    //     .then(function (result) {
    //       // If redirectToCheckout fails due to a browser or network
    //       // error, you should display the localized error message to your
    //       // customer using error.message.
    //       if (result.error) {
    //         alert(result.error.message);
    //       }
    //     })
    //     .catch(function (error) {
    //       console.error("Error:", error);
    //     });
    });
  </script>
    
@endsection
