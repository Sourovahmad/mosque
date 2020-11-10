
@extends('admin.includes.app')
@section('content')



<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">


        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand">New Activity</a>

            </nav>
        </div>
        <div class="card-body">



            <form method="POST" id="createEventForm" action="{{ route('admin.activity.store') }}" enctype="multipart/form-data">
                @csrf


                <div class="row">
                    <div class="form-group col-12  ">
                        <label for="title"> Activity Title<span style="color: red"> *</span></label>
                        <input type="text" name="title" class="form-control" id="title"  required>
                    </div>

                    

                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="description"> Description<span style="color: red"> *</span></label>
                        <textarea class="form-control" id="description" name="description" rows="4" required ></textarea>
                    </div>
                    

                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="image">Upload image<span style="color: red"> *</span></label><br>
                        <input type="file" name="image" id="image" accept=".png, .jpg, .jpeg" required>
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