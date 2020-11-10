
@extends('admin.includes.app')
@section('content')



<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">


        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand">Edit Activity</a>
            </nav>
        </div>
        <div class="card-body">



            <form method="POST" id="createEventForm" action="{{ route('admin.activity.update',$activity->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')


                <div class="row">
                    <div class="form-group col-12  ">
                        <label for="title"> Activity Title<span style="color: red"> *</span></label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Activity Title" value="{{ $activity->title }}" required>
                    </div>

                    

                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="description"> Description<span style="color: red"> *</span></label>
                        <textarea class="form-control" id="description" name="description" rows="4"  required > {{ $activity->description }}</textarea>
                    </div>

                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="end_time">Upload image</label><br>
                        <input type="file" name="image" id="image" accept=".png, .jpg, .jpeg">
                        <div>
                            <br>
                            <p class="font-weight-bold">Note: Image resolution Must be 600*400 (width*height)</p>
                        </div>
                    </div>






                </div>

                <button type="submit" id="createEventSubmit" class="btn bg-abasas-dark"> Submit</button>



            </form>



        </div>
    </div>


</div>


 
@endsection