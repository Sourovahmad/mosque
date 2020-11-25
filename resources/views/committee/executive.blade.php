@extends('includes.app')


@section('Breadcrumb')
<!-- Top Banner -->


<!-- Breadcrumb area -->
<section class="cr-section breadcrumb-area" data-black-overlay="2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="cr-breadcrumb text-center">
                    <h2 class="cr-breadcrumb__title">MMC-EXECUTIVE MEMBERS</h2>
                    <div class="cr-breadcrumb__tree text-left text-md-left text-center">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>MMC-MEMBERS</li>
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

<section class="about-area ptb--150 bg--white flower--left-top flower--right-bottom" style="padding-top: 0px;">

    <div class="container">
        <div class="row align-items-center">


            <div class="col-12">
                @foreach ($committeies as $key => $committe)
                <div class="table-responsive">
                    <table class="table table-bordered p-4 ">
                        <h1 class="text-center p-4" style="font-weight: 800">MMC EXECUTIVE COMMITTEE (
                            {{ $sessions[$key] }} ) </h1>

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
                            @foreach ($committe as $singleCommitte)


                            <tr>
                                <td>{{ $i++}}</td>
                                <td>{{ $singleCommitte->name}}</td>
                                <td>{{ $singleCommitte->designation->name}}</td>
                                <td>{{ $singleCommitte->phone }}</td>
                            </tr>

                            @endforeach
                        </tbody>

                    </table>
                  </div>
                    @endforeach
                


            </div>
        </div>
    </div>
</section><!-- //About Area -->







@endsection
