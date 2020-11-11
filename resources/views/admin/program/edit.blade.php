

@extends('admin.includes.app')
@section('content')



<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">


        <form method="POST" id="createEventForm" action="{{route('admin.programs.update',$program->id)}}"  enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar navbar-dark ">
                    <a class="navbar-brand">Edit Program</a>
                    <button type="submit" id="createEventSubmit" class="btn btn-success btn-lg ">Publish</button>
                </nav>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-9 col-sm-12 " >   {{-- style="background-color: #F5EFE0;" --}}

                        <div class="form-group col-12  ">
                            <label  > Program Title<span style="color: red"> *</span></label>
                            <input type="text" name="title" class="form-control" id="title"  value="{{ $program->title }}"  required>
                        </div>



                        <div class="form-group col-12 ">
                            <label for="description"> Description<span style="color: red"> *</span></label>
                            <textarea class="form-control" id="description" name="description" rows="15"
                                required> {{ $program->description }} </textarea>
                        </div>


                    </div>

                    <div class="col-md-3 col-sm-12" >



                        <div class="form-group col-12">
                            <label for="category_id">Program Category<span style="color: red"> *</span></label>
                            <select class="form-control form-control" value="" name="category_id" id="category_id" required>
                                <option disabled selected value> select a Category </option>'
                                @foreach ($categories as $category)
                                @if ( $category->id == $program->category_id)
                                <option selected="selected" value="{{$category->id}}"> {{$category->name}}</option>
                                @else
                                <option value="{{$category->id}}"> {{$category->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-12 ">
                            <label for="image">Upload image</label><br>
                            <input type="file" name="image" id="image" accept=" .jpg, .jpeg">
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
