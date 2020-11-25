@extends('admin.includes.app')


@section('content')
<div class="container-fluid m-0 p-0">

    <div class="card mb-4 shadow">
        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand">Monthly Donations </a>
            </nav>
        </div>

        <div class="card-body">
            <div class="row">

                <div class="col-sm-12 col-md-6 ">

                    <x-line-chart :dataArray="$monthlyDonationsbar" />

                </div>

                <div class="d-none d-md-block col-sm-12 col-md-6 ">

                    <x-polar-area-chart :dataArray="$monthlyDonationspie" />

                </div>
            </div>
        </div>
    </div>


    <div class="card mb-4 shadow">
        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand">Daily Donations </a>
            </nav>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-12" >

                    <x-bar-chart :dataArray="$dailyDonationsbar" />
                </div>

            </div>
        </div>

    </div>

</div>

@endsection
