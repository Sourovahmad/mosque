@extends('includes.app')

@section('content')



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}



<div style="

background: url({{asset('abasas/images/bg/2.jpg')}});
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;

">
    <div class="p4" style="height : 70px">

    </div>


    <div class="container" style="height:70vh; ">

 




        <div class="row">
            <div class="col-md-4 col-l-4 col-sm-12 col-12  " style="margin:0 auto"> 

                <!--Form with header-->


                <!-- Default form login -->
                <form class="text-center border border-dark p-5 bg-dark text-light "  id="passwordUpdate"  method="POST" action="{{ route('password.update') }}" style=" 
                border-radius: 9px 9px 9px 9px;         
                border: 0px solid #000000;
                opacity:0.8;
                ">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                    <p class="h4 mb-md-4 text-light ">Reset Password</p>

                    <!-- Email -->
                    <div class="form-group ">
                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



                    <!-- Password -->
                    <div class="form-group ">
                        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    



                    <!-- Sign in button -->
                    
                    <div class="form-group  mb-0">
                        <div class="">
                            <button type="submit" class="btn primarybg btn-block"> Reset Password </button>
                        </div>
                    </div>

                    
                </form>
                <!-- Default form login -->
            
                <!--   Form with header-->
            </div>
        </div>
    </div>

</div>







@endsection
