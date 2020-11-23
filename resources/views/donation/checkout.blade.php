@extends('includes.app')


@section('content')



    
    <!-- Donnation Form -->
    <div class="pg-donation-area ptb--150 bg-image--5 border" id="donate" >
        <div class="container">
            <form action="{{ route('payments.store') }}" method="post" id="payment-form" class="pg-donation">
                {{ csrf_field() }}
                <div class="row justify-content-center">
                    <div class="col-12 mt-4">
                        <aside class="pg-donation__personalinfo">
                            <h4 class="pg-dontation__title ">Personal Information</h4>
                            {{-- <div class="col-12 row">
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
                             --}}
                            <div class="col-12 row">
                                <div class="col-12">
                                    <label for="address">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ $donator->email }}" >
                                    

                                </div>
                            </div>
                            {{-- <div class="col-12 row">
                                <div class="col-12">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" value="{{ $donator->address }}" >
                                    

                                </div>
                            </div> --}}


                            
                            <div class="col-12 row">
                                <div class="col-12">
                                    <label for="address">Amount</label>
                                    <input type="text" name="amount" id="address" class="form-control" value="{{ $donator->address }}" >
                                    

                                </div>
                            </div>


                            <label for="card-element">
                                Credit or debit card
                                </label>
                                <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                                </div>
                             
                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>
                            <button>Submit Payment</button>
                         
                        


                        </aside>
                    </div>
                </div>

            </form>
        </div>
    </div><!-- //Donnation Form -->


@endsection
@section('customJS')

<script src="https://js.stripe.com/v3/"></script>

<script>
    

    var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
    </script>
    <script src="{{ asset('/js/card.js') }}"></script>

    
@endsection
