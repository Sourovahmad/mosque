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
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 mt-4">
                        <aside class="pg-donation__personalinfo">
                            <h4 class="pg-dontation__title">Donation Information</h4>


                            <div class="single-input ">
                                <label for="pg-donation-email">Phone*</label>
                                <input type="tel" name="phone" id="pg-donation-phone" required>
                            </div>



                            <div class="single-input">
                                <div class="input-group mb-3">
                                    <input type="number" step="any" class="form-control" placeholder="Amount($)" name="amount"
                                        aria-label="amount" aria-describedby="basic-addon2" required>
                                   
                                </div>
                            </div>

							
                            <div class="row mt-0 pt-0 " >

                                <div class="col-12 pt-0 mt-0">
                                    <div class="single-input donation-type mt-4 ">
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
                                </div>
                            </div>


                            <div class="single-input">
                                <button type="submit" class="cr-btn cr-btn--black text-light">Donate Now</button>
                            </div>






                        </aside>
                    </div>
                </div>

            </form>
        </div>
    </div><!-- //Donnation Form -->

    <script>
        var currencies = ["aed", "afn", "all", "amd", "ang", "aoa", "ars", "aud", "awg", "azn", "bam", "bbd", "bdt", "bgn",
            "bhd", "bif", "bmd", "bnd", "bob", "brl", "bsd", "btn", "bwp", "byr", "bzd", "cad", "cdf", "chf", "clf",
            "clp", "cny", "cop", "crc", "cuc", "cup", "cve", "czk", "djf", "dkk", "dop", "dzd", "egp", "ern", "etb",
            "eur", "fjd", "fkp", "gbp", "gel", "ghs", "gip", "gmd", "gnf", "gtq", "gyd", "hkd", "hnl", "hrk", "htg",
            "huf", "idr", "ils", "inr", "iqd", "irr", "isk", "jmd", "jod", "jpy", "kes", "kgs", "khr", "kmf", "kpw",
            "krw", "kwd", "kyd", "kzt", "lak", "lbp", "lkr", "lrd", "lsl", "ltl", "lvl", "lyd", "mad", "mdl", "mga",
            "mkd", "mmk", "mnt", "mop", "mro", "mur", "mvr", "mwk", "mxn", "myr", "mzn", "nad", "ngn", "nio", "nok",
            "npr", "nzd", "omr", "pab", "pen", "pgk", "php", "pkr", "pln", "pyg", "qar", "ron", "rsd", "rub", "rwf",
            "sar", "sbd", "scr", "sdg", "sek", "sgd", "shp", "skk", "sll", "sos", "srd", "ssp", "std", "svc", "syp",
            "szl", "thb", "tjs", "tmt", "tnd", "top", "try", "ttd", "twd", "tzs", "uah", "ugx", "usd", "uyu", "uzs",
            "vef", "vnd", "vuv", "wst", "xaf", "xag", "xau", "xcd", "xdr", "xof", "xpf", "yer", "zar", "zmk", "zmw",
            "btc", "jep", "eek", "ghc", "mtl", "tmm", "yen", "zwd", "zwl", "zwn", "zwr"
		];
		
		var html='';
		currencies.forEach(function(currency){
			if(currency=='usd'){
				
				html +='<option value='+currency+'  selected ="selected">'+currency+'</option>';
			}
			else{

				html +='<option value='+currency+'>'+currency+'</option>';
			}
			
		document.getElementById("currencySelect").innerHTML = html; 
		})
		
	

		

        function donate() {
            alert();
        }

    </script>

@endsection
