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
<div class="container-fluid">
    <div class="card mb-4 shadow">


        <form method="POST" id="createPostForm" action=""
            enctype="multipart/form-data">
            @csrf
            <div class="card-header py-3 bg-abasas-dark">
                <nav class="navbar navbar-dark ">
                    <a class="navbar-brand">New Post</a>
                    <button type="submit" id="createPostSubmit" class="btn btn-success btn-lg"> Publish</button>

                </nav>
            </div>
            <div class="card-body">





                <div class="row">

                    <div class="col-md-9 col-sm-12">

                        <div class="form-group col-12  ">
                            <label for="title">Title<span style="color: red"> *</span></label>
                            <input type="text" name="title" class="form-control" id="title" required>
                        </div>
                        <div class="form-group col-12 ">
                            <label for="description"> Description<span style="color: red"> *</span></label>
                            <textarea class="form-control" id="description" name="description" rows="15"
                                required></textarea>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-12">

                        <div class="form-group col-12">
                            <label for="postType">Post Type<span style="color: red"> *</span></label>
                            <select class="form-control form-control" value="" name="postType" id="postType"
                                required>
                                <option disabled selected value> select an option </option>'
                                
                                <option value="event"> Event</option>
                                <option value="blog">Blog</option>
                                <option value="program"> Program</option>
                            </select>
                        </div>
                        <div id='addSection'> </div>


                        <div class="form-group col-12 ">
                            <label for="image">Upload image<span style="color: red"> * &nbsp;</span><i id="InfoIcon" class="fa fa-info-circle" title='Image Resulation: 600 X 375'  aria-hidden="true"></i></label><br>
                            <input type="file" name="image" id="image" accept=" .jpg, .jpeg" required>
                        </div>

                    </div>

                </div>


            </div>
        </form>
    </div>


</div>

<script>
    $(document).ready(function(){


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

        // ********* Event *************
        $('#postType').change(function(){

            var postType=  $('#postType').val() ;
            if(postType == 'event'){

                var action = "{{ route('admin.event.store') }}";
                $('#createPostForm').attr('action',action);

                var eventhtml = '';

                eventhtml += '<div class="form-group col-12">';
                eventhtml +=    '<label for="category_id">Event Category<span style="color: red"> *</span></label>';        
                eventhtml +=    '<select class="form-control form-control" value="" name="category_id" id="category_id"' ;         
                eventhtml +=    'required>';
                eventhtml +=    '<option disabled selected value> select a Category </option>';            
                eventhtml +=    '@foreach ($eventCategories as $category)';
                eventhtml +=        ' <option value="{{$category->id}}"> {{$category->name}}</option>';           
                eventhtml +=    '  @endforeach';
                eventhtml +=    ' </select>';
                eventhtml +=    ' <button type="button" id="addPostCategory" class="btn btn-link">Add New Category</button>';         
                eventhtml +=    ' <div  id="inputForCategory">';

                eventhtml +=    '</div>';
                eventhtml +='</div>';

                eventhtml +='<div class="form-group col-12 ">';     
                eventhtml +=    '<label for="vanu"> Venu<span style="color: red"> *</span></label>';        
                eventhtml +=    '<input type="text" name="vanu" class="form-control" id="vanu" required>';        
                eventhtml +='</div>';
                eventhtml +='<div class="form-group col-12 ">';
                eventhtml +=    ' <label for="date"> Date<span style="color: red"> *</span></label>';         
                eventhtml +=    '  <input type="date" name="date" class="form-control" id="date" required>';       
                eventhtml +='</div>';




                eventhtml +='<div class="form-group col-12 ">';      
                eventhtml +=    '<label for="start_time"> Start Time<span style="color: red"> *</span></label>';           
                eventhtml +=    '<input type="time" name="start_time" class="form-control" id="startTime" required>';          
                eventhtml +='</div>';        

                eventhtml +='<div class="form-group col-12 ">';        
                eventhtml +=    ' <label for="end_time"> End Time<span style="color: red"> *</span></label>';           
                eventhtml +=    '<input type="time" name="end_time" class="form-control" id="endTime" required>';            
                eventhtml +=' </div>';       

                $('#addSection').html(eventhtml);

            }



        });


        
        // ********* Event *************

        $('#postType').change(function(){

            var postType=  $('#postType').val() ;
            if(postType == 'program'){
                var action = "{{ route('admin.programs.store') }}";
                $('#createPostForm').attr('action',action);
                var activityhtml = '';
                activityhtml +='<div class="form-group col-12"> ';
                activityhtml +='    <label for="category_id">Program Category<span style="color: red"> *</span></label>';
                activityhtml +='    <select class="form-control form-control" value="" name="category_id" id="category_id"';
                activityhtml +='       required>';
                activityhtml +='        <option disabled selected value> select a Category </option>';
                activityhtml +='        @foreach ($programCategories as $category)';
                activityhtml +='        <option value="{{$category->id}}"> {{$category->name}}</option>';
                activityhtml +='        @endforeach';
                activityhtml +='    </select>';
                activityhtml +='</div>';


                $('#addSection').html(activityhtml);

            }

        });  


        
        $('#postType').change(function(){

            var postType=  $('#postType').val() ;
            if(postType == 'blog'){

                var action = "{{ route('admin.blog.store') }}";
                $('#createPostForm').attr('action',action);

                var activityhtml = '';
                activityhtml +='<div class="form-group col-12"> ';
                activityhtml +='    <label for="category_id">Blog Category<span style="color: red"> *</span></label>';
                activityhtml +='    <select class="form-control form-control" value="" name="category_id" id="category_id"';
                activityhtml +='       required>';
                activityhtml +='        <option disabled selected value> select a Category </option>';
                activityhtml +='        @foreach ($blogCategories as $category)';
                activityhtml +='        <option value="{{$category->id}}"> {{$category->name}}</option>';
                activityhtml +='        @endforeach';
                activityhtml +='    </select>';
                activityhtml +='    <button type="button" id="addPostCategory" class="btn btn-link">Add New Category</button>';
                activityhtml +='     <div  id="inputForCategory"></div>';
                activityhtml +='</div>';
                activityhtml +='<div class="form-group col-12">';
                activityhtml +='    <label for="language_id">Blog Language<span style="color: red"> *</span></label>';
                activityhtml +='    <select class="form-control form-control" value="" name="language_id" id="language_id"';
                activityhtml +='        required>';
                activityhtml +='         <option disabled selected value> select a Language </option> ';
                activityhtml +='          @foreach ($languages as $language)';
                activityhtml +='          <option value="{{$language->id}}"> {{$language->name}}</option>';
                activityhtml +='         @endforeach';
                activityhtml +='      </select>';
                activityhtml +=' </div>';


                activityhtml +=' <div class="form-group col-12 ">';
                activityhtml +='     <label for="author_name"> Author Name<span style="color: red"> *</span></label>';
                activityhtml +='    <input type="text" name="author_name" class="form-control" id="author_name" required>';
                activityhtml +='</div>';

                $('#addSection').html(activityhtml);

            }

        });  



        $(document).on('click', "#addPostCategory", function () {
            
         
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

            var postType=  $('#postType').val() ;

            if( postType == 'event'){
                var home = "{{route('home')}}";
                var link = "admin/store-event-category"
                var action = home.trim() + '/' + link.trim();
            }
            if( postType == 'blog'){
                var home = "{{route('home')}}";
                var link = "admin/store-blog-category"
                var action = home.trim() + '/' + link.trim();
            }
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



    // $('#postType').change(function(){

    //     var selectedOption = $(this).children("option:selected").val();
      
    //        if(selectedOption == 'event') {
    //            $('#InfoIcon').attr( 'title', 'Image Resulation: 600 X 375');
              
    //        }

    // });


</script>



@endsection