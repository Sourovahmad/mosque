
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






<div class="container-fluid">


    <div class="form-group col-md-6 col-sm-12 p-4">
        <div>
            <h3 class="text-center font-weight-bold"> Salat Time Of current Month</h3>
        </div>
        <div class="pl-4">
            {{-- <img src="{{ asset($activePrayerTime->image->url) }}" alt="Praying Time" width="100%"> --}}
        </div>
    </div>



    
<!-- Begin Page Content -->
<div class="collapse" id="createNewForm">
    <div class="card mb-4 shadow">

        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light"> Add new  </a>
            </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('praying.store') }}"  enctype="multipart/form-data">
                @csrf
                <div class="form-row align-items-center" id="createFormFieldList">
                  
                
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="year_id">Year<span style="color: red"> *</span></label>
                        <select class="form-control form-control" value="" name="year_id" id="year_id"
                            required>
                            <option disabled selected value> select an option </option>'
                            @foreach ($years as $year)
                            <option value="{{$year->id}}"> {{$year->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    


                    <div class="form-group col-md-4 col-sm-12">
                        <label for="month_id">month<span style="color: red"> *</span></label>
                        <select class="form-control form-control" value="" name="month_id" id="month_id"
                            required>
                            @foreach ($months as $month)
                            <option value="{{$month->id}}"> {{$month->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6 col-sm-12 p-4  ">
                        <label for="image">Upload image <span style="color: red"> * &nbsp;</span></label><i class="fa fa-info-circle"  title="Image Resulation: 600 X 375" aria-hidden="true"></i><br>
                        <input type="file" name="image" id="image" accept=" .jpg, .jpeg" required >
                    </div>
                    

                </div>
                <div class="col-12">
                        <button type="submit" class="btn bg-abasas-dark mt-3">Submit</button>
                    </div>

            </form>
        </div>
    </div>
</div>






    <div class="card mb-4 shadow">

        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar">

                <div class="navbar-brand"><span id="eventList"> All list</span> </div>
                <div id="AddNewFormButtonDiv"><button type="button" class="btn btn-success btn-lg" id="AddNewFormButton" data-toggle="collapse"
                    data-target="#createNewForm" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-plus"
                        id="PlusButton"></i></button></div> 
                        <div class="filterform">
                            <form id="yearfilterform" method="post">
                             @csrf
                                <select class="form-control form-control" value="" name="year_id" id="yearfilterselectbar"
                                required>
                                <option disabled selected value> select year </option>'
                                @foreach ($years as $year)
                                <option value="{{$year->id}}"> {{$year->name}}</option>
                                @endforeach
                            </select>

                            <button type="submit" class="btn btn-primary mt-3" id="yearfilterbutton">Filter</button>
                            </form>
                        </div>

            </nav>

        </div>

            <div class="card-body">


                <div class="table-responsive">
        
        
        
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
        
        
                        <thead class="bg-abasas-dark">
        
                            <tr>
        
                                <th> #</th>
                                <th>Year</th>
                                <th>Month</th>
                                <th>Image</th>
                                <th>Action</th>
        
                            </tr>
                        </thead>
                        <tfoot class="bg-abasas-dark">
                            <tr>
        
                                <th> #</th>
                                <th>Year</th>
                                <th>Month</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
        
                        </tfoot>
        
                        <tbody >

                          @php
                            $itr=1;
                            @endphp
                            @foreach ($prayingtimes as $prayingtime)
        
        
                            <tr class="data-row" >
                                <td class="iteration">{{$itr++}}</td>
                         {{-- <td class="word-break">{{ $prayingtime->year->name }}</td>  --}}
                             {{-- <td class="word-break">{{ $prayingtime->month->name }}</td>  --}}
                                <td class="word-break"> <img src="{{ asset($prayingtime->image->thumbnail) }}" height="100px"> </td>
        
        
        
                                <td class="align-middle">
                                   
        
        
                                    <form method="POST" action="{{route('praying.destroy',$prayingtime->id)}}"
                                        id="delete-form-{{ $prayingtime->id}}" style="display:none; ">
                                        {{csrf_field() }}
                                        {{ method_field("delete") }}
                                    </form>
        
        
        
        
                                    <button title="Delete" class="dataDeleteItemClass btn btn-danger btn-sm" onclick="if(confirm('are you sure to delete this')){
                        document.getElementById('delete-form-{{ $prayingtime->id }}').submit();
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
</div>



<script>
    $(document).ready(function(){
        
        $('body').on('click', '#AddNewFormButton', function () {
            $('#PlusButton').toggleClass('fa-plus').toggleClass('fa-minus');

        });
    })


    $(document).on('click','#yearfilterbutton',function(){
        var id =    $('#yearfilterselectbar option:selected').val();

        var home = "{{route('home')}}";
            var link = "yearfilter"
            var action = home.trim() + '/' + link.trim() + '/' + id;
            $("#yearfilterform").attr('action', action);
   
    });
</script>

 
@endsection