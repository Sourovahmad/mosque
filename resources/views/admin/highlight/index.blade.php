
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
 


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand"> Top News</a>
               
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark">


                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                         
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $itr = 1; ?>
                        

                       
                        <tr class="data-row">
                           
                            <td class="iteration">{{$itr++}}</td>
                            <td class="word-break">{{ $highligt->title}}</td>
                            <td class="word-break">{{ $highligt->description}}</td>
    
<td>  <button type="button" class="btn btn-success" onclick="$('#edit-modal').modal();" > <i class="fa fa-edit" aria-hidden="false"> </i></button>
</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<!-- Attachment Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-modal-label ">Edit News</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="edit-form" class="form-horizontal" method="POST" action="{{ route('hightlights.update',1) }}">
                    @csrf
                    @method('put')



                    <!-- /id -->
                    <!-- name -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $highligt->title}}" id="modal-input-name" required autofocus>
                    </div>
                    <!-- /name -->
                    <!-- description -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-description">Description</label>
                  
                        <textarea class="form-control" name="description"  rows="3">
                            {{ $highligt->description}}

                        </textarea>
  
                    </div>

                    <div class="form-group">

                        <input type="submit" value=" সাবমিট" class="form-control btn btn-success">
                    </div>
                    <!-- /description -->




                </form>
            </div>

        </div>
    </div>
</div>
</div>
<!-- /Attachment Modal -->



 
@endsection