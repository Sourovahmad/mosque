@extends('includes.app')


@section('Breadcrumb')
<!-- Top Banner -->


<!-- Breadcrumb area -->
<section class="cr-section breadcrumb-area" data-black-overlay="2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="cr-breadcrumb text-center">
                    <h2 class="cr-breadcrumb__title">OUR PROGRAMS</h2>
                    <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
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

    <div class="events-grid ptb--70 bg--pattern">
        <div class="container">
            <div class="row">


                <div class="col-sm-12 col-md-4 p-4">

                    <div class="card bg-light " >
                        <div class="card-header font-weight-bold ">Darse Quran </div>
                        <div class="card-body">
                            <p class="card-text">Time: Tuesday after Maghrib. </p>
                            <p> <br></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 p-4">

                    <div class="card bg-light ">
                        <div class="card-header font-weight-bold">Darse Bukhari</div>
                        <div class="card-body">
                            <p class="card-text">Time: Saturday after Maghrib.</p>
                            <p> <br></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 p-4">

                    <div class="card bg-light ">
                        <div class="card-header font-weight-bold">Weekend Quran Class</div>
                        <div class="card-body">
                            <p class="card-text">Time: 10:00AM-1:30PM.</p>
                            <p>Suspended Due to COVID -19 until further notice.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 p-4">

                    <div class="card bg-light ">
                        <div class="card-header font-weight-bold">Adults Quran Class (Male)</div>
                        <div class="card-body">
                            <p class="card-text">Time: Wednesday, Thursday and Sunday, After Maghrib to Isha Azan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 p-4">

                    <div class="card bg-light ">
                        <div class="card-header font-weight-bold">Youth Activities and Family Night Summer Quran Class</div>
                        <div class="card-body">
                            <p class="card-text">Time: July-August, 10:30am-1:30pm.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 p-4">

                    <div class="card bg-light ">
                        <div class="card-header font-weight-bold">Two Jamat for Jummah</div>
                        <div class="card-body">
                            <p class="card-text">Time: 1st- 1:15pm and 2nd- 2:00pm.</p>
                            <p></p> 
                            
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 p-4">

                    <div class="card bg-light ">
                        <div class="card-header font-weight-bold">​COVID-19 (Jummah Sessions)</div>
                        <div class="card-body">
                            <p class="card-text">Time: 1st- 12:30PM Khutbah, 2nd- 1:00PM Khutbah, 3rd- 1:30PM Khutbah.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 p-4">

                    <div class="card bg-light ">
                        <div class="card-header font-weight-bold">Family Counseling</div>
                        <div class="card-body">
                            <p class="card-text">Islam: Q&A. 718-526-2451.</p>
                             

                        </div>
                    </div>
                </div>

               


            </div>
        </div>

    </div>

</main><!-- //Page Conent -->



@endsection
