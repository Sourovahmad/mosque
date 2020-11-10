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

            <div class="navbar-brand"><span id="eventList"> Activity List</span> </div>

            <a href="{{route('admin.activity.create')}}"><button type="button" class="btn btn-success btn-lg"
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
                        <th>Action</th>

                    </tr>
                </thead>
                <tfoot class="bg-abasas-dark">
                    <tr>

                        <th> #</th>
                        <th>Title</th>
                        <th>Action</th>

                    </tr>

                </tfoot>

                <tbody>

                    @php
                    $itr=1;
                    @endphp
                    @foreach ($activities as $activity)


                    <tr class="data-row">
                        <td class="iteration">{{$itr++}}</td>
                        <td class="word-break">{{ $activity->title }}</td>


                        <td class="align-middle">
                            <a href="{{route('admin.activity.edit',$activity->id)}}"><button title="Edit" type="button"
                                    class="dataEditItemClass btn btn-success btn-sm" id="data-edit-button"> <i
                                        class="fa fa-edit" aria-hidden="false"> </i></button></a>


                            <form method="POST" action="{{route('admin.activity.destroy',$activity->id)}}"
                                id="delete-form-{{ $activity->id}}" style="display:none; ">
                                {{csrf_field() }}
                                {{ method_field("delete") }}
                            </form>




                            <button title="Delete" class="dataDeleteItemClass btn btn-danger btn-sm" onclick="if(confirm('are you sure to delete this')){
				document.getElementById('delete-form-{{ $activity->id }}').submit();
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
