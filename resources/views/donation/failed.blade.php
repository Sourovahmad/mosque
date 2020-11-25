<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MASJID MISSION CENTER INC.</title>
		<link rel="stylesheet" href="{{asset('abasas/css/bootstrap.min.css')}}">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-3 p-4 ">
                <img  src="{{ asset('abasas/images/donation/failed.png') }}" alt="failed" width="100%" >
                
            </div>
        </div>
        <h1 class="text-center">OOPS, FAILED</h1>
        <h6 class="text-center"><a class="text-center" href="{{ route('home') }}">Back to Home</a></h6>
    </div>


    <script src="{{asset('abasas/js/bootstrap.min.js')}}"></script>
    
</body>
</html>