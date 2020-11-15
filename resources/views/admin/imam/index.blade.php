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
    <div class="" id="createNewForm"  style="display: none">
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






    <div class="" id="ImamUpdateForm" style="display: none">
        <div class="card mb-4 shadow">
    
            <div class="card-header py-3  bg-abasas-dark ">
                <nav class="navbar navbar-dark">
                    <a class="navbar-brand text-light"> Update Imam  </a>
                </nav>
            </div>
            <div class="card-body">
                <form method="POST" id="UpdateForm" action="" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="row">
                        

                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="name"> Name<span style="color: red"> *</span></label>
                        <input type="text" name="name" class="form-control" id="Updatename" value=""  required>
                    </div>

                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="name"> Designation <span style="color: red"> *</span></label>
                        <input type="text" name="designation" class="form-control" id="Updatedesignation"  required>
                    </div>

                    <div class="form-group col-12  ">
                        <label for="image">Upload image &nbsp;</label><i class="fa fa-info-circle"  title="Image Resulation: 400 X 500" aria-hidden="true"></i><br>
                        <input type="file" name="image"  accept=".jpg, .jpeg" >
                    </div>
                    


                    </div>

                    <button type="Updatesubmit"  class="btn bg-abasas-dark" id="ImamUpdateButton"> Submit</button>

                </form>
            </div>
        </div>
    </div>
    
    
    

    <div class="card mb-4 shadow">

        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar  ">

                <div class="navbar-brand"><span id="eventList"> Imam List</span> </div>
                <div id="AddNewFormButtonDiv"><button type="button" class="btn btn-success btn-lg" id="AddNewFormButton" ><i class="fas fa-plus"
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
                            <td class="word-break name">{{ $imam->name }}</td>
                            <td class="word-break designation">{{ $imam->designation }}</td>
                            <td class="word-break image"> <img src="{{ asset($imam->image->url) }}" alt="{{ $imam->designation }} " height="100px"> </td>


                            <td class="align-middle">
                                <button type="button" class="btn btn-success" id="ImamEditButton" 

                                data-item-id={{$imam->id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>


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
            $('#createNewForm').toggle();
            $('#PlusButton').toggleClass('fa-plus').toggleClass('fa-minus');
            
            $('#ImamUpdateForm').hide();

        });


        $(document).on('click','#ImamEditButton',function(){ 
            if( $('#PlusButton').hasClass('fa-minus')){
                $('#createNewForm').toggle();
                $('#PlusButton').toggleClass('fa-plus').toggleClass('fa-minus');
            }
            $('#ImamUpdateForm').show();

            var id =  $(this).attr("data-item-id");


            var imamss = @json($imams);
            var name ='';
            var designation = '';
            $.each(imamss.data, function (key) {
                if(id == imamss.data[key].id){
                        name = imamss.data[key].name;
                        designation = imamss.data[key].designation;
                }

            });
                

            var home = "{{route('home')}}";
                var link = "admin/imam/"
                var action = home.trim() + '/' + link.trim() + id;

                $('#UpdateForm').attr('action',action);
        
            $('#Updatename').val(name);
            $('#Updatedesignation').val(designation);


        });


        

    });

   




</script>

 
@endsection

