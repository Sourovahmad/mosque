@extends('includes.app')

@section('Breadcrumb')
<!-- //Breadcrumb area -->
<!-- Top Banner -->
<div class="banner-area">
    <div class="banner bg-image--7 banner-text-slide slider-arrow--style1 slide-animate-text">

        <!-- Single Banner -->
        <div class="banner__single fullscreen d-flex align-items-center" data-black-overlay="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner__content text-center">
                            {{-- <img src="{{asset('abasas/images/others-png/bismilla-word.png')}}" alt="bismillah word"> --}}

  
                       
                              <h1>MMC MEMBERS</h1>
                            {{-- <h3>Whoever builds a Masjid, seeking the pleasure of Allah, Allah shall build a house for
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
<!-- //Top Banner -->
@endsection



@section('content')
         
<section class="about-area ptb--150 bg--white flower--left-top flower--right-bottom" style="padding-top: 0px;">

    <h1 class="text-center p-4 uppercase" style="font-weight: 800" >
MMC MEMBERS
    </h1>

     
    <div class="container">
        <div class="row align-items-center">
            
       
            
          <div class="col-12">
            <table class="table table-bordered p-4 " >
                <thead class="thead text-light" style="background-color: #2F3690">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DESIGNATION</th>
                    <th scope="col">PHONE</th>
                  </tr>
                </thead>
                <tbody>

                   @php
                   $i =1
                   @endphp
                @foreach ($committees as $committee)
                    
                
                  <tr>
                    <td>{{ $i++}}</td>
                    <td>{{ $committee->name}}</td>
                    <td>{{ $committee->designation->name}}</td>
                    <td>{{ $committee->phone }}</td>
                  </tr>

                  @endforeach
                </tbody>
              </table>

          </div>
        </div>
    </div>
</section><!-- //About Area -->

 
@endsection