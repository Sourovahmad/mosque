
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
<div class="collapse" id="createNewForm">
    <div class="card mb-4 shadow">

        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light"> Add new  </a>
            </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.gallery.') }}">
                @csrf
                <div class="form-row align-items-center" id="createFormFieldList">
                  
                


                    

                   



                   

                </div>
                <div class="col-12">
                        <button type="submit" class="btn bg-abasas-dark mt-3">Submit</button>
                    </div>

            </form>
        </div>
    </div>
</div>


<div class="container-fluid">


    <div class="card mb-4 shadow">

        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar  ">

                <div class="navbar-brand"><span id="eventList"> Gallery List</span> </div>

            </nav>
        </div>
        <div class="card-body">


            <div class="table-responsive">



                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">


                    <thead class="bg-abasas-dark">

                        <tr>

                            <th> #</th>
                            <th>Caption</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>

                            <th> #</th>
                            <th>Caption</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody >

                        @php
                        $itr=1;
                        @endphp
                        @foreach ($galleries as $gallery)


                        <tr class="data-row" >
                            <td class="iteration">{{$itr++}}</td>
                            <td class="word-break">{{ $gallery->caption }}</td>
                            <td class="word-break"> <img src="{{ asset($gallery->image->thumbnail) }}" alt="{{ $gallery->caption }} " height="100px"> </td>



                            <td class="align-middle">
                               


                                <form method="POST" action="{{route('admin.gallery.destroy',$gallery->id)}}"
                                    id="delete-form-{{ $gallery->id}}" style="display:none; ">
                                    {{csrf_field() }}
                                    {{ method_field("delete") }}
                                </form>




                                <button title="Delete" class="dataDeleteItemClass btn btn-danger btn-sm" onclick="if(confirm('are you sure to delete this')){
                    document.getElementById('delete-form-{{ $gallery->id }}').submit();
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
                {{ $galleries->links() }}

            </div>


        </div>


    </div>
</div>





 
@endsection