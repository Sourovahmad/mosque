@extends('includes.app')


@section('content')



    
    <!-- Donnation Form -->
    <div class="pg-donation-area ptb--150 bg-image--5 border" id="donate" >
        <div class="container">
            <form action="{{ route('checkout') }}" method="get" id="pg-donation" class="pg-donation">
                <div class="row justify-content-center">
                    <div class="col-12 mt-4">
                        <aside class="pg-donation__personalinfo">
                            <h4 class="pg-dontation__title ">Personal Information</h4>
                            <div class="col-12 row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $donator->first_name }}" >
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $donator->last_name }}" >
                                    
                                </div>
                            </div>
                            <div class="col-12 row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="cel_phone">Cel Phone</label>
                                    <input type="tel" name="cel_phone" id="first_name" class="form-control" value="{{ $donator->cel_phone }}" >
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="home_phone">Home Phone</label>
                                    <input type="tel" name="home_phone" id="home_phone" class="form-control" value="{{ $donator->home_phone }}" >
                                    
                                </div>
                            </div>
                            
                            <div class="col-12 row">
                                <div class="col-12">
                                    <label for="address">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ $donator->email }}" >
                                    

                                </div>
                            </div>
                            <div class="col-12 row">
                                <div class="col-12">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" value="{{ $donator->address }}" >
                                    

                                </div>
                            </div>

                            <div class="col-12 row">
                                <div class="col-sm-12 col-md-4">
                                    <label for="city">City</label>
                                    <input type="text" name="city" id="city" class="form-control" value="{{ $donator->city }}" >
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <label for="state">State</label>
                                    <input type="text" name="state" id="state" class="form-control" value="{{ $donator->state }}" >
                                    
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <label for="zip_code">Zip Code</label>
                                    <input type="text" name="zip_code" id="zip_code" class="form-control" value="{{ $donator->zip_code }}" >
                                    
                                </div>
                            </div>


                           




                        </aside>
                    </div>
                </div>

            </form>
        </div>
    </div><!-- //Donnation Form -->


@endsection
