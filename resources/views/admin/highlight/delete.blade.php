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


<div class="card shadow mb-4">

    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar  ">

            <div class="navbar-brand"><span id="eventList"> HighLight List</span> </div>

            <a href="{{route('hightlights.create')}}"><button type="button" class="btn btn-success btn-lg"
                    id="AddNewFormButton"><i class="fas fa-plus" id="PlusButton"></i></button></a>


        </nav>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-abasas-dark">

                    
                    <tr>

                        <th> #</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tfoot class="bg-abasas-dark">
                    <tr>

                        <th> #</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>

                    </tr>

                </tfoot>

                <tbody>

                    @php
                    $itr=1;
                    @endphp
                    @foreach ($highligts as $highligt)


                    <tr class="data-row">
                        <td class="iteration">{{$itr++}}</td>
                        <td class="word-break">{{ $highligt->title}}</td>
                        <td class="word-break">{{ $highligt->description}}</td>


                        <td class="align-middle">
                            <form method="POST" action="{{route('hightlights.destroy',$highligt->id)}}"
                                id="delete-form-{{ $highligt->id}}" style="display:none; ">
                                {{csrf_field() }}
                                {{ method_field("delete") }}
                            </form>




                            <button title="Delete" class="dataDeleteItemClass btn btn-danger btn-sm" onclick="if(confirm('are you sure to delete this')){
				document.getElementById('delete-form-{{ $highligt->id }}').submit();
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
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        
        $('#dataTable').DataTable({   
                    dom: 'lBfrtip',
                    buttons: [
                        'copy', 'csv', 'excel' , 'pdf' , 'print'
                    ]
                });
     
    });
</script>









@endsection
