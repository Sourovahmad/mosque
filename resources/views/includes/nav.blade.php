	{{-- Home
	About 
	Event
	Donation
	Our Programs
		- Jummah Kutba
		- Darse Bujhari
		- Darse Quran
		- special Event
	MMC Members
		- Life Members
		- General Members
		- Executive Committee
	BOT 
	Imams
	
	
	 --}}			
			
			
			
			
			<!-- Header -->
			<header id="header-area" class="header-area fixed--header sticky--header">
				<div class="container">
					<div class="header header--style-1">
						<div class="logo image--logo hidden-md hidden-sm hidden-xs">
							<a href="{{ route('home') }}"><img src="{{ asset('abasas/images/logo/MMC_Title_logo-removebg-preview.png') }}" alt="header logo"></a>
						</div>
						<div class="header__right">
							<div class="header__right__top d-flex justify-content-end align-items-center flex-wrap flex-sm-nowrap">
								<ul class="header__right__times d-flex justify-content-end">
									<li><p><i class="icofont icofont-full-sunny"></i>SUNRISE : <span class="time-sunrise"></span></p></li>
									<li><p><i class="icofont icofont-full-night"></i>SUNSET : <span class="time-sunset"></span></p></li>
								</ul>
								{{-- <ul class="header__right__icons d-flex justify-content-end">
									<li class="minicart-trigger"><a href="#"><i class="fa fa-opencart"></i><span class="cart-counter">2</span></a></li>
									<li class="accountbox-trigger"><a href="#"><i class="fa fa-user-o"></i></a></li>
								</ul> --}}
							</div>
							<div class="header__right__bottom">
								
								<!-- Main naviagtion -->
								<nav class="menu">
									<ul class="justify-content-end">
										
										<li><a href="{{ route('home') }}">HOME</a></li>

										
										<li><a href="about-us.html">ABOUT</a></li>
										<li><a href="about-us.html">EVENT</a></li>
										<li><a href="about-us.html">DONATION</a></li>

										<li class="cr-dropdown"><a href="activities.html">OUR PROGRAMS</a>
											<ul class="cr-dropdown-menu">
												<li><a href="activities.html">Jummah Kutba</a></li>
												<li><a href="single-activity.html">Darse Bujhari</a></li>
											</ul>
										</li>
										<li><a href="donation.html">DONATION</a></li>
										<li class="cr-dropdown"><a href="#">PAGES</a>
											<ul class="cr-dropdown-menu">
												<li><a href="shop.html">Shop</a></li>
												<li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
												<li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
												<li><a href="product-details.html">Product Details</a></li>
												<li><a href="cart.html">Shopping Cart</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="checkout.html">Checkout</a></li>
											</ul>
										</li>
										<li class="cr-dropdown"><a href="blogs-right-sidebar.html">BLOG</a>
											<ul class="cr-dropdown-menu">
												<li><a href="blogs.html">Blogs</a></li>
												<li><a href="blogs-right-sidebar.html">Blogs Right Sidebar</a></li>
												<li><a href="blogs-left-sidebar.html">Blogs Left Sidebar</a></li>
												<li><a href="blog-details.html">Blog Details</a></li>
												<li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
											</ul>
										</li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</nav><!-- //Main naviagtion -->                                                                            

							</div>
						</div>
						<div class="mobile-menu hidden-lg hidden-xlg hidden-xx hidden-sp">
							<a class="mobile-logo" href="{{ route('home') }}"><img src="{{ asset('abasas/images/logo/MMC_Title_logo-removebg-preview.png') }}" alt="logo"></a>
						</div>
					</div>
				</div>
			</header>