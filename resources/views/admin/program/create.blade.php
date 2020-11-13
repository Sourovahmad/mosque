@extends('admin.includes.app')
@section('content')



<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">


        <form method="POST" id="createEventForm" action="{{ route('admin.programs.store') }}"  enctype="multipart/form-data">
            @csrf
            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar navbar-dark ">
                    <a class="navbar-brand">New Program</a>
                    <button type="submit" id="createEventSubmit" class="btn btn-success btn-lg ">Publish</button>
                </nav>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-9 col-sm-12 " >   {{-- style="background-color: #F5EFE0;" --}}

                        <div class="form-group col-12  ">
                            <label  > Program Title<span style="color: red"> *</span></label>
                            <input type="text" name="title" class="form-control" id="title"  required>
                        </div>



                        <div class="form-group col-12 ">
                            <label for="description"> Description<span style="color: red"> *</span></label>
                            <textarea class="form-control" id="description" name="description" rows="15"
                                required></textarea>
                        </div>


                    </div>

                    <div class="col-md-3 col-sm-12" >


                        <div class="form-group col-12">
                            <label for="category_id">Programs Category<span style="color: red"> *</span></label>
                            <select class="form-control form-control" value="" name="category_id" id="category_id"
                                required>
                                <option disabled selected value> select a Category </option>'
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}"> {{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-12 ">
                            <label for="image">Upload image<span style="color: red"> *</span><i class="fa fa-info-circle"  title="Image Resulation: 600 X 375" aria-hidden="true"></i></label><br>
                            <input type="file" name="image" id="image" accept=".jpg, .jpeg" required>
                        </div>
    

                    </div>




                </div>









            </div>

        </form>
    </div>


</div>


<script>
    $(document).ready(function() {
        $('#description').summernote({
        tabsize: 4,
        height: 300,
        disableDragAndDrop: true,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['view', ['fullscreen',   'help']]
        ]
      });
    });
</script>


@endsection
