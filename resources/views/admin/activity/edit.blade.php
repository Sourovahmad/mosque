

@extends('admin.includes.app')
@section('content')



<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">


        <form method="POST" id="createEventForm" action="{{ route('admin.activity.update',$activity->id) }}"  enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar navbar-dark ">
                    <a class="navbar-brand">Edit Activity</a>
                    <button type="submit" id="createEventSubmit" class="btn btn-success btn-lg ">Publish</button>
                </nav>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-9 col-sm-12 " >   {{-- style="background-color: #F5EFE0;" --}}

                        <div class="form-group col-12  ">
                            <label  > Activity Title<span style="color: red"> *</span></label>
                            <input type="text" name="title" class="form-control" id="title"  value="{{ $activity->title }}"  required>
                        </div>



                        <div class="form-group col-12 ">
                            <label for="description"> Description<span style="color: red"> *</span></label>
                            <textarea class="form-control" id="description" name="description" rows="15"
                                required> {{ $activity->description }} </textarea>
                        </div>


                    </div>

                    <div class="col-md-3 col-sm-12" >

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
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    });
</script>


@endsection
