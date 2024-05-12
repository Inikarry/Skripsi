<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Skripsi Perbandingan Database">
  <meta name="author" content="skripsi">
  <link rel="icon" href="../../assets/images/favicon/favicon-unhas.ico" type="image/x-icon">
  <link rel="shortcut icon" href="../../assets/images/favicon/favicon-unhas.ico" type="image/x-icon">
  <title>Skripsi</title>

  @stack('predent-style')
  @include('includes.styles')
  @stack('addon-style')
</head>

<body>
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="loader"></div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
      @include('includes.header')
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper">
        @include('includes.sidebar')
      </div>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        @yield('content')
      </div>
      <!-- footer start-->
      <footer class="footer">
        @include('includes.footer')
      </footer>
    </div>
  </div>
  @stack('predent-script')
  @include('includes.scripts')
  @stack('addon-script')
</body>

</html>