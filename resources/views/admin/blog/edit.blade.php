
@extends('admin.includes.app')
@section('content')



<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">


        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand">Edit Blog</a>
            </nav>
        </div>
        <div class="card-body">



            <form method="POST" id="createEventForm" action="{{ route('admin.blog.update',$blog->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')


                <div class="row">
                    <div class="form-group col-12  ">
                        <label for="title"> Blog Title<span style="color: red"> *</span></label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ $blog->title }}" required>
                    </div>

                    
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="category_id">Blog Category<span style="color: red"> *</span></label> 
                       <select class="form-control form-control" value="" name="category_id" id="catagory_id" required>
                           <option disabled selected value>  select a Category  </option>'
                           @foreach ($categories as $category)
                           @if ( $category->id == $blog->category_id) 
                               <option selected="selected"  value="{{$category->id}}"> {{$category->name}}</option>  
                           @else
                               <option value="{{$category->id}}"> {{$category->name}}</option>
                           @endif
                           @endforeach
                       </select>
                   </div>
                   <div class="form-group col-md-4 col-sm-12">
                       <label for="language_id">Blog Language<span style="color: red"> *</span></label> 
                      <select class="form-control form-control" value="" name="language_id" id="language_id" required>
                          <option disabled selected value>  select a Language  </option>'
                          @foreach ($languages as $language)
                          @if ( $language->id == $blog->language_id) 
                               <option selected="selected"  value="{{$language->id}}"> {{$language->name}}</option> 
                           @else
                                <option value="{{$language->id}}"> {{$language->name}}</option>
                           @endif
                          @endforeach
                      </select>
                  </div>

                    
                    <div class="form-group col-md-4 col-sm-12 ">
                        <label for="author_name"> Author Name<span style="color: red"> *</span></label>
                        <input type="text" name="author_name" class="form-control" id="author_name" value="{{ $blog->author_name }}" required>
                    </div>


                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="description"> Description<span style="color: red"> *</span></label>
                        <textarea class="form-control" id="description" name="description" rows="4" value="" required >{{ $blog->description }}</textarea>
                    </div>



                    <div class="form-group col-md-6 col-sm-12 ">
                        <label for="image">Upload image</span></label><br>
                        <input type="file" name="image" id="image" accept=".png, .jpg, .jpeg" >
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