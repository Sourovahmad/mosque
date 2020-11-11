@extends('admin.includes.app')


@section('content')


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session()->has('success'))
<div class="alert alert-success">
    @if(is_array(session('success')))
    <ul>
        @foreach (session('success') as $message)
        <li>{{  $message }}</li>
        @endforeach
    </ul>
    @else
    {{ session('success') }}
    @endif
</div>
@endif



<div class="card shadow mb-4">

    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar  ">

            <div class="navbar-brand"><span id="eventList"> Imam Information</span> </div>

        </nav>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-12 p-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset($imam->image->url) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $imam->name  }}</h5>
                    </div>

                </div>




                
            </div>
            <div class="col-md-6 col-sm-12 p-4">

                <form method="POST" id="createEventForm" action="{{ route('admin.imam.update',$imam->id ) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="row">
                        
                    <div class="form-group col-12  ">
                        <label for="image">Upload image</label><br>
                        <input type="file" name="image" id="image" accept=".png, .jpg, .jpeg" >
                    </div>
                    
                    <div class="form-group col-12  ">
                        <label for="name"> Name<span style="color: red"> *</span></label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $imam->name }}"  required>
                    </div>


                    </div>

                    <button type="submit" id="createEventSubmit" class="btn bg-abasas-dark"> Update</button>







                </form>
            </div>

        </div>


    </div>


</div>


@endsection
