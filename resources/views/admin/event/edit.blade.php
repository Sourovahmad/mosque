@extends('admin.includes.app')
@section('content')



<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">


        <form method="POST" id="createEventForm" action="{{ route('admin.event.update',$event->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar navbar-dark ">
                    <a class="navbar-brand">Edit Event</a>
                    <button type="submit" id="createEventSubmit" class="btn btn-success btn-lg"> Publish</button>
                </nav>
            </div>
            <div class="card-body">





                <div class="row">

                    <div class="col-md-9 col-sm-12">


                        <div class="form-group col-12  ">
                            <label for="title"> Event Title<span style="color: red"> *</span></label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Event Title"
                                value="{{ $event->title }}" required>
                        </div>

                        <div class="form-group col-12 ">
                            <label for="description"> Description<span style="color: red"> *</span></label>
                            <textarea class="form-control" id="description" name="description" rows="4"
                                required> {{ $event->description }}</textarea>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-12">

                        <div class="form-group col-12">
                            <label for="category_id">Event Category<span style="color: red"> *</span></label>
                            <select class="form-control form-control" value="" name="category_id" id="catagory_id"
                                required>
                                @foreach ($categories as $category)
                                @if ( $category->id == $event->category_id)
                                <option selected="selected" value="{{$category->id}}"> {{$category->name}}</option>
                                @else
                                <option value="{{$category->id}}"> {{$category->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-12 ">
                            <label for="vanu"> Venu<span style="color: red"> *</span></label>
                            <input type="text" name="vanu" class="form-control" id="vanu" placeholder="Vanu"
                                value="{{ $event->vanu }}" required>
                        </div>

                        <div class="form-group col-12 ">
                            <label for="date"> Date<span style="color: red"> *</span></label>
                            <input type="date" name="date" class="form-control" id="date" value="{{ $event->date }}"
                                required>
                        </div>




                        <div class="form-group col-12 ">
                            <label for="start_time"> Start Time<span style="color: red"> *</span></label>
                            <input type="time" name="start_time" class="form-control" id="startTime"
                                value="{{ $event->start_time }}" required>
                        </div>

                        <div class="form-group col-12 ">
                            <label for="end_time"> End Time<span style="color: red"> *</span></label>
                            <input type="time" name="end_time" class="form-control" id="endTime"
                                value="{{ $event->end_time }}" required>
                        </div>


                        <div class="form-group col-12 ">
                            <label for="end_time">Upload image</label><br>
                            <input type="file" name="image" id="image" accept=".png, .jpg, .jpeg">

                        </div>


                    </div>


                </div>

            </div>
        </form>
    </div>


</div>


<script>
    $(document).ready(function () {
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
