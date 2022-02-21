<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SRKP RMS </title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('css/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
</head>
<body class="hold-transition login-page">

<div id="ExampleComponent">
      @yield('ExampleComponent')
</div>

<div id="dashboard">
      @yield('dashboard')
</div>

<div id="categorywiseReport">
      @yield('categorywiseReport')
</div>

<div id="customReport">
      @yield('customReport')
</div>

<div id="manageCategory">
      @yield('manageCategory')
</div>

<div id="manageCompany">
      @yield('manageCompany')
</div>

<div id="manageGroups">
      @yield('manageGroups')
</div>

<div id="manageOrders">
      @yield('manageOrders')
</div>

<div id="manageProducts">
      @yield('manageProducts')
</div>

<div id="manageStore">
      @yield('manageStore')
</div>

<div id="manageTables">
      @yield('manageTables')
</div>

<div id="manageUsers">
      @yield('manageUsers')
</div>

<div id="menuwiseReport">
      @yield('menuwiseReport')
</div>

<div id="productAssembly">
      @yield('productAssembly')
</div>

<div id="productwiseReport">
      @yield('productwiseReport')
</div>

<div id="rawMaterials">
      @yield('rawMaterials')
</div>

<div id="viewallProducts">
      @yield('viewallProducts')
</div>

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('js/Chart.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.js')}}"></script>
</body>
</html>
