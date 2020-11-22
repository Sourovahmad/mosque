@extends('includes.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
                <form class="text-center border border-dark p-5 bg-dark text-light "  id="login"  method="POST" action="{{ route('login') }}" style=" 
                border-radius: 9px 9px 9px 9px;         
                border: 0px solid #000000;
                opacity:0.8;
                ">
                @csrf

                    <p class="h4 mb-md-4 text-light ">Login</p>

                    <!-- Email -->
                    <div class="mb-4">

                        <input id="email" type="email" class="form-control   @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <!-- Password -->
                    <div class="mb-4">
                        <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
    
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    



                    <!-- Sign in button -->
                    <div>
                        <button class="btn primarybg btn-block" type="submit"  name="submit">Login</button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                    </div>

                    
                </form>
                <!-- Default form login -->
            
                <!--   Form with header-->
            </div>
        </div>
    </div>

</div>


@endsection
