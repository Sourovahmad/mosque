
@extends('admin.includes.app')
@section('content')




<div class="container-fluid m-0 p-0">

    <div class="card mb-4 shadow " id="addCommittee">


        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand">New Member</a>

            </nav>
        </div>
        <div class="card-body">



            <form method="POST" id="createEventForm" action="{{ route('admin.committee.store') }}">
                @csrf


                <div class="row">
                    <div class="form-group col-sm-12 col-md-4 ">
                        <label for="name"> Name<span style="color: red"> *</span></label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    
                    <div class="form-group col-sm-12 col-md-4  ">
                        <label for="phone"> Phone<span style="color: red"> *</span></label>
                        <input type="tel" name="phone" class="form-control" id="phone" >
                    </div>


                    <div class="form-group col-sm-12 col-md-4 ">
                        <label for="member_type">Member Type<span style="color: red"> *</span></label>
                        <select class="form-control form-control" value="" name="member_type" id="member_type"
                            required>
                            <option disabled selected value> select an option </option>'
                            @foreach ($member_types as $member_type)
                            <option value="{{$member_type->id}}"> {{$member_type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    


                    <div class="form-group col-sm-12 col-md-4 ">
                        <label for="designation_id">Designation<span style="color: red"> *</span></label>
                        <select class="form-control form-control" value="" name="designation_id" id="designation_id"
                            required>
                            @foreach ($designations as $designation)
                            <option value="{{$designation->id}}"> {{$designation->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div id="AddSessionSection" class="col-sm-12 col-md-4  p-0"></div>




                </div>

                <button type="submit" id="createEventSubmit" class="btn bg-abasas-dark"> Submit</button>



            </form>

        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        
        $('#member_type').change(function(){

        var memberType=  $('#member_type').val() ;
        if(memberType == 3){

            var sessionhtml = '';
            sessionhtml +='<div class="form-group col-12"> ';
            sessionhtml +='    <label for="session_id">Active Session<span style="color: red"> *</span></label>';
            sessionhtml +='    <select class="form-control form-control" value="" name="session_id" id="session_id"';
            sessionhtml +='       required>';
            sessionhtml +='        <option disabled selected value> select an option </option>';
            sessionhtml +='        @foreach ($sessions as $session)';
            sessionhtml +='        <option value="{{$session->id}}"> {{$session->name}}</option>';
            sessionhtml +='        @endforeach';
            sessionhtml +='    </select>';
            sessionhtml +='</div>';


            $('#AddSessionSection').html(sessionhtml);
        }
        else{
            var sessionhtml = '';
            $('#AddSessionSection').html(sessionhtml);
        }

        });  


    });
</script>


 
@endsection