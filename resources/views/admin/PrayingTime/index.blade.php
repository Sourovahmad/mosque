
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
<div class="" id="createNewForm">
    <div class="card mb-4 shadow">

        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light"> Add new and Update Schedule </a>
            </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('praying.store') }}"  enctype="multipart/form-data">
                @csrf
                <div class="form-row align-items-center" id="createFormFieldList">
                  
                
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="year">Year<span style="color: red"> *</span></label>
                        <select class="form-control form-control" value="" name="year" id="year"
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
                            <option value="2031"> 2031</option>

                        </select>
                    </div>
                    


                    <div class="form-group col-md-4 col-sm-12">
                        <label for="month">month<span style="color: red"> *</span></label>
                        <select class="form-control form-control" value="" name="month" id="month"
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

                <div class="navbar-brand"><span id="eventList"> Praying Time at {{ $year }}</span> </div>
                {{-- <div id="AddNewFormButtonDiv"><button type="button" class="btn btn-success btn-lg" id="AddNewFormButton" data-toggle="collapse"
                    data-target="#createNewForm" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-plus"
                        id="PlusButton"></i></button></div>  --}}
                        <div class="filterform">
                            <form id="yearfilterform" class="form-inline" method="post">
                             @csrf


                             <div class="form-group  mb-2">
                                <select class="form-control " value="" name="year" id="yearfilterselectbar"
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
                                <option value="2031"> 2031</option>
                            </select>
                             </div>

                    

                             <div class="form-group  mb-2"> 
                                <button type="submit" id="yearfilterbutton" class="btn btn-primary mb-2 form-control">Filter</button>
                             </div>


                              
                            </form>
                        </div>

            </nav>

        </div>

            {{-- <div class="card-body">


                <div class="table-responsive">
        
        
        
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
        
        
                        <thead class="bg-abasas-dark">
        
                            <tr>
        
                                <th> #</th>
                                <th>Month</th>
                                <th>Image</th>
        
                            </tr>
                        </thead>
                        <tfoot class="bg-abasas-dark">
                            <tr>
        
                                <th> #</th>
                                <th>Month</th>
                                <th>Image</th>
                            </tr>
        
                        </tfoot>
        
                        <tbody >

                          @php
                            $itr=1;
                            @endphp
                            @foreach ($prayingtimes as $prayingtime)
        
        
                            <tr class="data-row" >
                                <td class="iteration">{{$itr++}}</td>
                             <td class="word-break">{{ $prayingtime->month_name->name }}</td> 
                                <td class="word-break"> <img src="{{ asset($prayingtime->image->thumbnail) }}" height="100px"> </td>
        
        
        
                             
        
        
                            </tr>
                            @endforeach
        
                        </tbody>  
                    </table>
        
                </div>
        


        
            </div> --}}

 <div class="row">

  @foreach ($prayingtimes as $prayingtime) 
    <div class="col-md-6 col-sm-12 p-4" >

        <div class="card" style="width: 24rem; ">
            <img class="card-img-top" src="{{ asset($prayingtime->image->url) }}" alt="Card image cap" style="height:300px;">
            <div class="card-body">
       <p class="text-dark">{{ $prayingtime->month_name->name }}</p>
            </div>
          </div>   
    
         
    </div>
    
 @endforeach 



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