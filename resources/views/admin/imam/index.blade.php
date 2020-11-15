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


<div class="container-fluid">
    
    <!-- Begin Page Content -->
    <div class="collapse" id="createNewForm">
        <div class="card mb-4 shadow">
    
            <div class="card-header py-3  bg-abasas-dark ">
                <nav class="navbar navbar-dark">
                    <a class="navbar-brand text-light"> Add new  </a>
                </nav>
            </div>
            <div class="card-body">
                <form method="POST" id="createEventForm" action="{{ route('admin.imam.store' ) }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="row">
                        

                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="name"> Name<span style="color: red"> *</span></label>
                        <input type="text" name="name" class="form-control" id="name"   required>
                    </div>

                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="name"> Designation <span style="color: red"> *</span></label>
                        <input type="text" name="designation" class="form-control" id="designation"  required>
                    </div>

                    <div class="form-group col-12  ">
                        <label for="image">Upload image &nbsp;</label><i class="fa fa-info-circle"  title="Image Resulation: 400 X 500" aria-hidden="true"></i><br>
                        <input type="file" name="image" id="image" accept=".jpg, .jpeg" >
                    </div>
                    


                    </div>

                    <button type="submit"  class="btn bg-abasas-dark"> Submit</button>

                </form>
            </div>
        </div>
    </div>
    
    
    

    <div class="card mb-4 shadow">

        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar  ">

                <div class="navbar-brand"><span id="eventList"> Imam List</span> </div>
                <div id="AddNewFormButtonDiv"><button type="button" class="btn btn-success btn-lg" id="AddNewFormButton" data-toggle="collapse"
                    data-target="#createNewForm" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-plus"
                        id="PlusButton"></i></button></div> 

            </nav>
        </div>
        <div class="card-body">


            <table class="table-responsive">



                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">


                    <thead class="bg-abasas-dark">

                        <tr>

                            <th> #</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>

                            <th> #</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody >

                        @php
                        $itr=1;
                        @endphp
                        @foreach ($imams as $imam)


                        <tr class="data-row" >
                            <td class="iteration">{{$itr++}}</td>
                            <td class="word-break">{{ $imam->name }}</td>
                            <td class="word-break">{{ $imam->designation }}</td>
                            <td class="word-break"> <img src="{{ asset($imam->image->url) }}" alt="{{ $imam->designation }} " height="100px"> </td>



                            <td class="align-middle">
                               


                                <form method="POST" action="{{route('admin.imam.destroy',$imam->id)}}"
                                    id="delete-form-{{ $imam->id}}" style="display:none; ">
                                    {{csrf_field() }}
                                    {{ method_field("delete") }}
                                </form>




                                <button title="Delete" class="dataDeleteItemClass btn btn-danger btn-sm" onclick="if(confirm('are you sure to delete this')){
                    document.getElementById('delete-form-{{ $imam->id }}').submit();
                }
                else{
                    event.preventDefault();
                }
                " class="btn btn-danger btn-sm btn-raised">
                                    <i class="fa fa-trash" aria-hidden="false">

                                    </i>
                                </button>




                            </td>


                        </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $imams->links() }}
              

            </table>


        </div>


    </div>
</div>



<script>
    $(document).ready(function(){
        
        $('body').on('click', '#AddNewFormButton', function () {
            $('#PlusButton').toggleClass('fa-plus').toggleClass('fa-minus');

        });
    })
</script>

 
@endsection






{{-- 
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

                <form method="POST" id="createEventForm" action="{{ route('admin.imam.store' ) }}" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="row">
                        
                    <div class="form-group col-12  ">
                        <label for="image">Upload image &nbsp;</label><i class="fa fa-info-circle"  title="Image Resulation: 400 X 500" aria-hidden="true"></i><br>
                        <input type="file" name="image" id="image" accept=".jpg, .jpeg" >
                    </div>
                    
                    <div class="form-group col-12  ">
                        <label for="name"> Name<span style="color: red"> *</span></label>
                        <input type="text" name="name" class="form-control" id="name"   required>
                    </div>

                    <div class="form-group col-12  ">
                        <label for="name"> Designation <span style="color: red"> *</span></label>
                        <input type="text" name="designation" class="form-control" id="designation"  required>
                    </div>


                    </div>

                    <button type="submit"  class="btn bg-abasas-dark"> Submit</button>







                </form>
            </div>

        </div>


    </div>


</div> --}}


{{-- @endsection --}}
