<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
<link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
<link href="{{asset('admin/css/simple-sidebar.css')}}" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" >
      <div class="sidebar-heading">ADMIN </div>
      <div class="list-group list-group-flush">
      <a href="{{route('tc')}}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
      <a href="{{route('product.index')}}" class="list-group-item list-group-item-action bg-light">Product</a>
      <a href="{{route('restoreindex')}}" class="list-group-item list-group-item-action bg-light">logproduct</a>
      <a href="{{route('usercontroller.index')}}" class="list-group-item list-group-item-action bg-light">User</a>
      <a href="{{route('logout')}}" class="list-group-item list-group-item-action bg-light">Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="btn " id="menu-toggle"><span class="navbar-toggler-icon"></span></button>
      </nav>
      @if (Session::has('sucesss'))
      <div class="pull-right alert alert-success" style=" display: inline-table;float: right;">
          <strong>Success!</strong> {{session('sucesss')}}
        </div>
      @endif
      @if (Session::has('error'))
      <div class="pull-right alert alert-danger" style=" display: inline-table;float: right;">
          <strong>error!</strong> {{session('error')}}
        </div>
      @endif
      <div class="container-fluid">
        
        @yield('content')
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
<script src="{{asset('admin')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('admin')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
@yield('script')
</body>
<style>
 .navbar
 {
    display: flow-root;
 }
 nav>button
 {
     float: right;
 }
 @media only screen and (max-width: 600px) {
   #sidebar-wrapper
   {
     position: absolute;
     z-index: 1;
   }
 }
</style>
</html>
