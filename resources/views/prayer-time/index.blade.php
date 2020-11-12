@extends('includes.app')

@section('Breadcrumb')
<!-- //Breadcrumb area -->
			 <!-- Top Banner -->
			<div  class="banner-area">
				<div class="banner bg-image--8 banner-text-slide slider-arrow--style1 slide-animate-text">

						<!-- Single Banner -->
						<div class="banner__single fullscreen d-flex align-items-center" data-black-overlay="6">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="banner__content text-center">	
                                            
									
											<h1>Praying Time</h1>
											
										</div>
									</div>
								</div>
							</div>
						</div><!-- //Single Banner -->


				</div>
			</div><!-- //Top Banner --> 


@endsection

@section('content')


<section style="background-color: lavender">

	<div class="row">
		<div class="col-md-9 col-sm-12 pl-4 pt-4">
			<div>
				<h3 class="text-center font-weight-bold">Praying Time of {{ Carbon\Carbon:: now()->format('F, Y') }}</h3>
			</div>
			<div class="pl-4">
				<img src="{{ asset($salat->image->url) }}" alt="Praying Time" >
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
