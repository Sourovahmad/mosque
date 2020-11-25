@extends('admin.includes.app')
@section('content')


@php
$currentYear = Carbon\Carbon:: now()->format('Y');
@endphp




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






<div class="container-fluid m-0 p-0">

    <div class="card mb-4 shadow">

        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light"> {{ Carbon\Carbon:: now()->format('F, Y') }} </a>
            </nav>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    @if (!is_null($activePrayerTime))
                    <img src="{{ asset($activePrayerTime->image->thumbnail) }}" alt="Praying Time" width="100%">
                    @else
                    <p>No image found for <strong>{{ Carbon\Carbon:: now()->format('F, Y') }}</strong></p>
                    @endif
                </div>
            </div>
        </div>

    </div>








    <!-- Begin Page Content -->
    <div class="" id="createNewForm">
        <div class="card mb-4 shadow">

            <div class="card-header py-3  bg-abasas-dark ">
                <nav class="navbar navbar-dark">
                    <a class="navbar-brand text-light"> Schedule </a>
                </nav>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.praying.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row align-items-center" id="createFormFieldList">



                        <div class="form-group col-sm-12 col-md-4 ">
                            <label for="year">Year<span style="color: red"> *</span></label>
                            <select class="form-control form-control" value="" name="year" id="year" required>

                                <option disabled selected value> select year </option>
                                @for ($i = $currentYear; $i < $currentYear+6; $i++) <option value="{{ $i }}"> {{ $i }}
                                    </option>
                                    @endfor


                            </select>
                        </div>



                        <div class="form-group col-sm-12 col-md-4 ">
                            <label for="month">month<span style="color: red"> *</span></label>
                            <select class="form-control form-control" value="" name="month" id="month" required>
                                @foreach ($months as $month)
                                <option value="{{$month->id}}"> {{$month->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-sm-12 col-md-4  ">
                            <label for="image">Upload image <span style="color: red"> * &nbsp;</span></label><br>
                            <input type="file" name="image" id="image" accept=" .jpg, .jpeg" required>
                        </div>


                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn bg-abasas-dark mt-3">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>






    <div class="card mb-4 shadow">

        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar">

                <div class="navbar-brand"><span id="eventList"> Praying Time at {{ $year }}</span> </div>

                <div>
                    <form method="get" class="form-inline">
                        <div class="form-group  mb-2">
                            <select class="form-control " value="" name="year" id="yearfilterselectbar" required>
                                <option disabled selected value> select year </option>'
                                @for ($i = 2020; $i < $currentYear+6; $i++) <option value="{{ $i }}"> {{ $i }}</option>
                                    @endfor
                            </select>
                        </div>



                        <div class="form-group  mb-2">
                            <button type="submit" id="yearfilterbutton"
                                class="btn btn-primary mb-2 form-control">Filter</button>
                        </div>
                    </form>
                </div>

            </nav>

        </div>

        <div class="card-body">
            <div class="row">
                @foreach ($prayingtimes as $prayingtime)
                <div class="col-sm-12 col-md-6">
                    <img class="card-img-top" src="{{ asset($prayingtime->image->thumbnail) }}" alt="Praying Time"
                        style="height:300px;">
                    <p class="text-dark font-weight-bold text-center">{{ $prayingtime->month->name }}, {{ $year }}</p>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>



<script>
    $(document).ready(function () {

        $('body').on('click', '#AddNewFormButton', function () {
            $('#PlusButton').toggleClass('fa-plus').toggleClass('fa-minus');

        });
    })


    $(document).on('click', '#yearfilterbutton', function () {
        var id = $('#yearfilterselectbar option:selected').val();

        var home = "{{route('home')}}";
        var link = "yearfilter"
        var action = home.trim() + '/' + link.trim() + '/' + id;
        $("#yearfilterform").attr('action', action);

    });

</script>


@endsection
