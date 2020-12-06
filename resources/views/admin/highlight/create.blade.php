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




<!-- Begin Page Content -->
<div class="container-fluid m-0 p-0">
    <div class="card mb-4 shadow">


        <form method="POST" id="createEventForm" action="{{ route('hightlights.store') }}"  enctype="multipart/form-data">
            @csrf
            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar navbar-dark ">
                    <a class="navbar-brand">New HighLight</a>
                    <button type="submit" id="createEventSubmit" class="btn btn-success btn-lg d-none d-md-block ">Publish</button>
                </nav>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-9 col-sm-12 " >   {{-- style="background-color: #F5EFE0;" --}}

                        <div class="form-group col-12  ">
                            <label  > HighLight Title<span style="color: red"> *</span></label>
                            <input type="text" name="title" class="form-control" id="title"  required>
                        </div>



                        <div class="form-group col-12 ">
                            <label for="description"> Description<span style="color: red"> *</span></label>
                            <textarea class="form-control" id="description" name="description" rows="15"
                                required></textarea>
                        </div>


                    </div>

                  

                    </div>




                </div>









            </div>

        </form>
    </div>


</div>


@endsection