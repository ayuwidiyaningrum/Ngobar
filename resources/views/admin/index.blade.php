<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RBS</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller">
    @include('sweetalert::alert') 
    <!-- partial:partials/_navbar.html -->
    @include('admin.header')
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      {{-- left_sidebar --}}
        @include('admin.sidebar')
      {{-- left_sidebar --}}

      <!-- partial -->
      {{-- main-panel --}}
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
         <!-- partial:partials/_footer.html -->
         @include('admin.footer')
         <!-- partial -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
<script src="{{ asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('admin/js/template.js')}}"></script>
  <script src="{{ asset('admin/js/settings.js')}}"></script>
  <script src="{{ asset('admin/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->

  	
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <script>
    $('.delete-confirm').on('click', function (event) {
       event.preventDefault();
       const url = $(this).attr('href');
       swal({
           title: 'Anda yakin data dihapus?',
           text: 'This record and it`s details will be permanantly deleted!',
           icon: 'warning',
           buttons: ["Cancel", "Yes!"],
           }).then(function(value) {
           if (value) {
           window.location.href = url;
         }
       });
      });
 </script>
</body>

</html>

