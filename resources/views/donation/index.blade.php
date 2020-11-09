@extends('includes.app')

@section('Breadcrumb')
    <!-- Top Banner -->

    <!-- Breadcrumb area -->
    <section class="cr-section breadcrumb-area" data-black-overlay="7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="cr-breadcrumb text-center">
                        <h2 class="cr-breadcrumb__title">Donation</h2>
                        <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Donation</li>
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



    <!-- Donnation Form -->
    <div class="pg-donation-area ptb--150 bg--white border">
        <div class="container">
            <form action="{{ route('donations.store') }}" method="post" id="pg-donation" class="pg-donation">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <aside class="pg-donation__personalinfo">
                            <h4 class="pg-dontation__title">Personal Information</h4>
                            <div class="single-input">
                                <label for="pg-donation-name">Name*</label>
                                <input type="text" name="name" id="pg-donation-name">
                            </div>
                            {{-- <div class="single-input">
                                <label for="pg-donation-email">Email*</label>
                                <input type="email" id="pg-donation-email">
                            </div> --}}
                            <div class="single-input">
                                <label for="pg-donation-phone">Phone*</label>
                                <input type="number" name="phone" id="pg-donation-phone">
                            </div>
                            <div class="single-input">
                                <label for="pg-donation-address">Address*</label>
                                <input type="text" name="address" id="pg-donation-address">

                            </div>
                            {{-- <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-input">
                                        <label for="pg-donation-country">Country*</label>
                                        <select name="pg-donation-country" id="pg-donation-country">
                                            <option value="united-states">United States</option>
                                            <option value="canada">Canada</option>
                                            <option value="australia">Australia</option>
                                            <option value="germany">Germany</option>
                                            <option value="sweden">Sweden</option>
                                            <option value="india">India</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-input">
                                        <label for="pg-donation-profession">Profession*</label>
                                        <input type="text" id="pg-donation-profession">
                                    </div>
                                </div>
                            </div> --}}
                        </aside>
                    </div>
                    <div class="col-lg-6">
                        <aside class="pg-donation__bankinfo">
                            <h4 class="pg-dontation__title">Donation Information</h4>


                            <div class="single-input ">
                                <label for="pg-donation-email">Email*</label>
                                <input type="email" name="email" id="pg-donation-email">
                            </div>


                            {{-- <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <label for="pg-donation-amount">Donation Amount*</label>
                                        <input type="number" id="pg-donation-amount">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input donation-type">
                                        <p>
                                            <input type="radio" name="pg-donation-type" id="pg-donation-type-onetime">
                                            <label for="pg-donation-type-onetime">Onetime</label>
                                        </p>
                                        <p>
                                            <input type="radio" name="pg-donation-type" id="pg-donation-type-monthly">
                                            <label for="pg-donation-type-monthly">Monthly</label>
                                        </p>
                                    </div>
                                </div>
                            </div> --}}






                            {{-- <div class="single-input">
                                <label for="pg-donation-cardnumber">Card number</label>
                                <input type="text" id="pg-donation-cardnumber">
                            </div> --}}




                            {{-- <div class="single-input">
                                <label for="pg-donation-expiry-month">Expire Date</label>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <select name="pg-donation-country" id="pg-donation-expiry-month">
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
                                        <select name="pg-donation-country" id="pg-donation-expiry-year">
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}


                            {{-- <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <label for="pg-donation-security">Security Code</label>
                                        <input type="text" id="pg-donation-security">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <label for="pg-donation-zipcode">Zip Code</label>
                                        <input type="text" id="pg-donation-zipcode">
                                    </div>
                                </div>
                            </div> --}}


                            {{-- <div class="single-input payment-cards">
                                <h6>Payment Method</h6>
                                <p>
                                    <input type="radio" name="pg-donation-paycard" id="pg-donation-card-mastercard">
                                    <label for="pg-donation-card-mastercard"><img src="images/icons/card-mastercard.png"
                                            alt="card type"></label>
                                </p>
                                <p>
                                    <input type="radio" name="pg-donation-paycard" id="pg-donation-card-visa">
                                    <label for="pg-donation-card-visa"><img src="images/icons/card-visa.png"
                                            alt="card type"></label>
                                </p>
                                <p>
                                    <input type="radio" name="pg-donation-paycard" id="pg-donation-card-american-express">
                                    <label for="pg-donation-card-american-express"><img
                                            src="images/icons/card-american-express.png" alt="card type"></label>
                                </p>
                                <p>
                                    <input type="radio" name="pg-donation-paycard" id="pg-donation-card-decover">
                                    <label for="pg-donation-card-decover"><img src="images/icons/card-decover.png"
                                            alt="card type"></label>
                                </p>
                            </div> --}}

                            <div class="single-input">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Amount" name="amount"
                                        aria-label="amount" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
										<select class="custom-select" id="currencySelect" name="currency">
											<option value="3">Three</option>
										  </select>
                                    </div>
                                </div>
                            </div>

							
                            <div class="row mt-0 pt-0 " >

                                <div class="col-12 pt-0 mt-0">
                                    <div class="single-input donation-type mt-4 ">
                                        <p>
                                            <input type="radio" name="pg-donation-type" value="onetime" class="text-dark"
                                                name="donation-type" id="pg-donation-type-onetime" checked>
                                            <label for="pg-donation-type-onetime" class="text-dark">Onetime</label>
                                        </p>
                                        <p>
                                            <input type="radio" name="pg-donation-type" value="monthly" class="text-dark"
                                                name="donation-type" id="pg-donation-type-monthly">
                                            <label for="pg-donation-type-monthly" class="text-dark">Monthly</label>
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
