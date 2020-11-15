@extends('includes.app')


@section('Breadcrumb')
<!-- Top Banner -->


			<!-- Breadcrumb area -->
			<section class="cr-section breadcrumb-area" data-black-overlay="2">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="cr-breadcrumb text-center">
								<h2 class="cr-breadcrumb__title">PROGRAMS</h2>
								<div class="cr-breadcrumb__tree text-left text-md-left text-center">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li>Programs</li>
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


    <!-- Page Conent -->
    <main class="page-content">

        <div class="events-grid ptb--150 bg--white">
            <div class="container">
                <div class="activities">
                    <div class="row">
                        <!-- Single Activity -->
                        @foreach ($programs as $program )
                            
                     
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12">  
                            <figure class="activity wow fadeInLeft">
                                <div class="activity__thumb">
                                    <a href="{{ route('program-single',$program->id) }}">
                                        <img src="{{ asset($program->image->thumbnail) }}" alt="Program image">
                                    </a>
                                </div>
                                <figcaption class="activity__content text-center">
                                    <h3><a href="{{ route('program-single',$program->id) }}">{{ $program->title }}</a></h3>
                                    
                                <p>@php echo substr($program->description, 0,130) @endphp ... </p>
                                </figcaption>
                            </figure>
                        </div><!-- //Single Activity -->

                        @endforeach



                    </div>
                </div>
                <div class="cr-pagination text-center">
                    <ul>
{{ $programs->links() }}
                    </ul>
                </div>
            </div>
        </div>

    </main><!-- //Page Conent -->



@endsection
