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

            <div class="navbar-brand"><span id="eventList"> Salat Time</span> </div>

        </nav>
    </div>

    <div class="card-body">

        <form method="POST" id="createEventForm" action="{{ route('admin.salat.update',$salat->id) }}">
            @csrf
            @method('put')

            <div class="row">
                <div class="form-group col-md-4 col-sm-12 p-4">
                    <label for="fajr"> Fajr </label>
                    <input type="time" name="fajr" class="form-control" id="fajr" value="{{ $salat->fajr }}" required>
                </div>

                <div class="form-group col-md-4 col-sm-12 p-4">
                    <label for="dhuhr">Dhuhr</label>
                    <input type="time" name="dhuhr" class="form-control" id="dhuhr" value="{{ $salat->dhuhr }}"required>
                </div>

                <div class="form-group col-md-4 col-sm-12 p-4">
                    <label for="jumma"> Jumma</label>
                    <input type="time" name="jumma" class="form-control" id="jumma" value="{{ $salat->jumma }}"required>
                </div>

                <div class="form-group col-md-4 col-sm-12 p-4">
                    <label for="asr"> Asr</label>
                    <input type="time" name="asr" class="form-control" id="asr" value="{{ $salat->asr }}" required>
                </div>

                <div class="form-group col-md-4 col-sm-12 p-4">
                    <label for="maghrib"> Maghrib</label>
                    <input type="time" name="maghrib" class="form-control" id="maghrib" value="{{ $salat->maghrib }}" required>
                </div>

                <div class="form-group col-md-4 col-sm-12 p-4">
                    <label for="isha">Isha</label>
                    <input type="time" name="isha" class="form-control" id="isha" value="{{ $salat->isha }}" required>
                </div>


            </div>

            <button type="submit" id="createEventSubmit" class="btn bg-abasas-dark"> Update</button>







        </form>

    </div>


</div>


@endsection
