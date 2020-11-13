@extends('includes.app')

@section('Breadcrumb')
    <!-- //Breadcrumb area -->
    <!-- Top Banner -->
    <div class="banner-area">
        <div class="banner bg-image--8 banner-text-slide slider-arrow--style1 slide-animate-text">

            <!-- Single Banner -->
            <div class="banner__single fullscreen d-flex align-items-center" data-black-overlay="6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner__content text-center">
                                {{-- <img
                                    src="{{ asset('abasas/images/others-png/bismilla-word.png') }}" alt="bismillah word">
                                --}}
                                <h1 style="text-transform: uppercase;">  PROGRAMS</h1>
                                {{-- <h3>Whoever builds a Masjid, seeking the pleasure of
                                    Allah, Allah shall build a house for
                                    him in Paradise." [Bukhari]. </h3> --}}

                                {{-- <div class="banner__content__button">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- //Single Banner -->


        </div>
    </div><!-- //Top Banner -->

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
