@extends('admin.includes.app')
@section('content')



<!-- Begin Page Content -->
<div class="container-fluid m-0 p-0">
    <div class="card mb-4 shadow">

        <form method="POST" id="createEventForm" action="{{ route('admin.blog.update',$blog->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar navbar-dark ">
                    <a class="navbar-brand">Edit Blog</a>
                    <button type="submit" id="createEventSubmit" class="btn btn-success btn-lg d-none d-md-block"> Publish</button>
                </nav>
            </div>
            <div class="card-body">


                <div class="row">

                    <div class="col-md-9 col-sm-12">


                        <div class="form-group col-12  ">
                            <label for="title"> Blog Title<span style="color: red"> *</span></label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ $blog->title }}"
                                required>
                        </div>
                            
                        <div class="form-group col-12 ">
                            <label for="description"> Description<span style="color: red"> *</span></label>
                            <textarea class="form-control" id="description" name="description" rows="4" value=""
                                required>{{ $blog->description }}</textarea>
                        </div>



                    </div>

                    <div class="col-md-3 col-sm-12">

                        <div class="form-group col-12">
                            <label for="category_id">Blog Category<span style="color: red"> *</span></label>
                            <select class="form-control form-control" value="" name="category_id" id="category_id" required>
                                <option disabled selected value> select a Category </option>'
                                @foreach ($categories as $category)
                                @if ( $category->id == $blog->category_id)
                                <option selected="selected" value="{{$category->id}}"> {{$category->name}}</option>
                                @else
                                <option value="{{$category->id}}"> {{$category->name}}</option>
                                @endif
                                @endforeach
                            </select>
                            <button type="button" id="addBlogCategory" class="btn btn-link">Add New Category</button>
                            <div  id="inputForCategory"></div>
                        </div>
                        <div class="form-group col-12">
                            <label for="language_id">Blog Language<span style="color: red"> *</span></label>
                            <select class="form-control form-control" value="" name="language_id" id="language_id" required>
                                <option disabled selected value> select a Language </option>'
                                @foreach ($languages as $language)
                                @if ( $language->id == $blog->language_id)
                                <option selected="selected" value="{{$language->id}}"> {{$language->name}}</option>
                                @else
                                <option value="{{$language->id}}"> {{$language->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
    
    
                        <div class="form-group col-12 ">
                            <label for="author_name"> Author Name<span style="color: red"> *</span></label>
                            <input type="text" name="author_name" class="form-control" id="author_name"
                                value="{{ $blog->author_name }}" required>
                        </div>
    
    
    
    
                        <div class="form-group col-12 ">
                            <label for="image">Upload image</span></label><br>
                            <input type="file" name="image" id="image" accept=".png, .jpg, .jpeg">
                        </div>
                        <div class="form-group col-12 ">
                            <label for="video">Video Link <i class="fa fa-info-circle"  title="Youtube embed code" aria-hidden="true"></i></label><br>
                            <textarea class="form-control" id="video" name="video" rows="5"
                                >{{ $blog->video }}</textarea>
                        </div>
                        
                        <div class="form-group col-12 ">

                            <button type="submit" id="createPostSubmit"
                                class="btn btn-success btn-lg d-block  d-md-none"> Publish</button>
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
                ['view', ['fullscreen',   'help']]
            ]
        });


        
        $(document).on('click', "#addBlogCategory", function () {
            
         
            var html ='';
            html+= '<form id="categoryAddFormInput" >';
            html+= '<div class="form-group pl-4">';
            html+=    '<label class="col-form-label" for="addName">Category Name<span style="color: red"> *</span></label>';
            html+=    '<input type="text" name="name" class="form-control" id="addName">';
            html+=' </div>';
            html+='<div class="btn-group   pl-4 ">';
            html+=   '<button type="button" id="cancel-button"  class="form-control btn btn-danger ">Cancel</button>';
            html+=   '<button type="button" id="submit-button"  class="form-control btn btn-success ">Submit</button>';
            html+='  </div>';
            html+= ' </form>';
          
            $('#inputForCategory').html(html);
           

        });
        
        $(document).on('click', "#cancel-button", function () {

            var html ='';
            $('#inputForCategory').html(html);
        });
        $(document).on('click', "#submit-button", function () {
            var token = $('#csrfToken').val();
            var name = $('#addName').val();

            var home = "{{route('home')}}";
            var link = "admin/store-blog-category"
            var action = home.trim() + '/' + link.trim();

            $.ajax({
                url : action,
                method : 'POST',
                data: {
                    '_token': token,
                    'name': name
                },
                success : function(categories){
                    if(categories !='Error'){
                        var html2 = '';

                        var len = categories.length - 1;
                        
                        categories.forEach(function (category, item) {

                                if (len == item ) {
                                    html2 += '   <option  selected="selected"  value="  ' + category.id + ' ">  ' + category.name + '    </option>';
                                } else {
                                    html2 += '   <option value="  ' + category.id + ' "> ' + category.name + '</option>';
                                }

                        });
                        $("#category_id").html(html2);
                    }


                    


                },
                error : function(err){

                    console.log(err);

                }
            });



            var html ='';
            $('#inputForCategory').html(html);
        });


        $('#category_id').change(function(){
            var html = '';
            $('#inputForCategory').html(html);            
        });





    });

</script>

@endsection
