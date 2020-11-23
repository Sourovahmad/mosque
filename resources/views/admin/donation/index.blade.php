
@extends('admin.includes.app')
@section('content')



<div class="card shadow mb-4">

    <div class="card-header py-3 bg-abasas-dark">
        <nav class="navbar  ">

            <div class="navbar-brand"><span id="eventList"> Donations List</span> </div>



        </nav>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-abasas-dark">

                    <tr>

                        <th> #</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Amount</th>
                        <th>Payment id</th>
                        <th>Date</th>

                    </tr>
                </thead>
                <tfoot class="bg-abasas-dark">
                    <tr>

                        <th> #</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Amount</th>
                        <th>Payment id</th>
                        <th>Date</th>

                    </tr>

                </tfoot>

                <tbody>

                    @php
                    $itr=1;
                    @endphp
                    @foreach ($donations as $donation)


                    <tr class="data-row">
                        <td class="iteration">{{$itr++}}</td>
                        <td class="word-break">{{ $donation->donator->first_name }}  {{ $donation->donator->last_name }} </td>
                        <td class="word-break">{{ $donation->donator->email }}</td>
                        <td class="word-break">{{ $donation->donator->cel_phone }}</td>
                        <td class="word-break">{{ $donation->amount }}</td>
                        <td class="word-break">{{ $donation->payment_id }}</td>
                        <td class="word-break">{{ $donation->created_at->format('d M,Y h:i:a') }}</td>




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