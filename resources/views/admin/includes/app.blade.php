
@include('admin.includes.formLink')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Mission Center</title>

    <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}" type="text/css">

    {{--<link rel="stylesheet" href="{{asset('css/admin/all.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/admin/sb-admin-2.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/admin/dataTables.bootstrap4.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/admin/datatables.min.css')}}">
    <link rel="stylesheet" src="{{asset('bootstrap-select/css/bootstrap-select.min.css')}}">
    
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <style>
        .border-dotted{
            border-style: dotted;
            border-width: 3px;
        }
        .dataTables_wrapper .dt-buttons {
            float:left;  
            text-align:center;
            margin-left: 20px;
        }
   
.bg-abasas-dark {

    background-color: #2a3f5c !important;
    color: #fff;

}
.adminTitle{
    font-size: 30px;
    text-transform: uppercase;
    font-family:'Arial', Times, serif; 
    font-style:normal ; 
    font-weight:800; 
    color: #2a3f5c !important ;
    line-height:normal;
    text-align: center;
}

@media only screen and (min-width: 1920px) {
  .adminTitle {
    font-size: 45px; } }

@media only screen and (min-width: 1600px) and (max-width: 1919px) {
  .adminTitle {
    font-size: 45px;
 } }

@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .adminTitle {
    font-size: 40px;
 } }

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .adminTitle {
    font-size: 30px;
 } }

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .adminTitle {
    font-size: 25px;
 } }

@media only screen and (max-width: 767px) {
  .adminTitle {
    font-size: 18px;
 } }

@media only screen and (max-width: 576px) {
  .adminTitle {
    font-size: 15px;
 } }

    </style>



    <script src="{{asset('js/admin/jquery.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrapbundle.js')}}"></script>
    <script src="{{asset('js/admin/easing.min.js')}}"></script>
    <script src="{{asset('js/admin/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('js/admin/Chart.min.js')}}"></script>
    {{-- <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script> --}}
    <script src="{{asset('js/admin/dataTables.min.js')}}"></script>
    {{-- <script src="{{asset('js/admin/dataTables.bootstrap4.min.js')}}"></script> --}}
    <script src="{{asset('bootstrap-select/js/bootstrap-select.min.js')}}"></script>

   

    
    <script src="{{asset('js/abasas/app.js')}}"></script>
    
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>

$(document).ready(function(){
    
    $('[data-toggle="tooltip"]').tooltip()

});
</script>
</head>


<body id="page-top">


{{-- 
    <x-navbar>

    </x-navbar> --}}



    {{-- <div class="row">

        <div class="col-2">
            <x-sidebar />
        </div>
        <div class="col-10">




            @yield('content')





        </div>





    </div>

    </div>
    <x-footer>

    </x-footer>





 --}}



 

    <!-- Page Wrapper -->
    <div id="wrapper">


        <x-sidebar />
   

    

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                
                <x-navbar/>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('content')

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>



</body>

</html>