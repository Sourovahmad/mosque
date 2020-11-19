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

  <div class="card mb-4 shadow">

    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar  ">

            <div class="navbar-brand"><span id="eventList"> Praying Time List of {{ $name }}</span> </div>
            <div id="AddNewFormButtonDiv"><button type="button" class="btn btn-success btn-lg" id="AddNewFormButton" data-toggle="collapse"
                data-target="#createNewForm" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-plus"
                    id="PlusButton"></i></button></div> 

                    <div class="filterform">
                        <form id="yearfilterform" method="post">
                         @csrf
                            <select class="form-control form-control" value="" name="year_id" id="yearfilterselectbar"
                            required>
                            <option disabled selected value> select year </option>'
                          
                            <option value="2020"> 2020</option>
                            <option value="2021"> 2021</option>
                            <option value="2022"> 2022</option>
                            <option value="2023"> 2023</option>
                            <option value="2024"> 2024</option>
                            <option value="2025"> 2025</option>
                            <option value="2026"> 2026</option>
                            <option value="2027"> 2027</option>
                            <option value="2028"> 2028</option>
                            <option value="2029"> 2029</option>
                            <option value="2030"> 2030</option>
                            
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
                    @foreach ($yearfilter as $year)


                    <tr class="data-row" >
                        <td class="iteration">{{$itr++}}</td>
                        {{-- <td class="word-break">{{ $year->year->name }}</td> --}}
                        {{-- <td class="word-break">{{ $year->month->name }}</td> --}}
                        <td class="word-break"> <img src="{{ asset($year->image->url) }}" height="100px"> </td>



                        <td class="align-middle">
                           


                            <form method="POST" action="{{route('praying.destroy',$year->id)}}"
                                id="delete-form-{{ $year->id}}" style="display:none; ">
                                {{csrf_field() }}
                                {{ method_field("delete") }}
                            </form>




                            <button title="Delete" class="dataDeleteItemClass btn btn-danger btn-sm" onclick="if(confirm('are you sure to delete this')){
                document.getElementById('delete-form-{{ $year->id }}').submit();
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