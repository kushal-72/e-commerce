
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> {{ config('app.name', 'E-commerce') }} </title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.ico">
  <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
  <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.1">
  <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
  
  <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css">
  <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css">
  <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css"></head>

<body class="  ">
  <!-- loader Start -->
  <div id="loading">
        <div id="loading-center">
        </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper" style="background: url(../assets/images/background.png); background-attachment: fixed; background-size: cover; ">
    @include('admin.layouts.sidebar')
    @include('admin.layouts.header')

    @yield('content')
    <footer class="iq-footer">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-6">
                      <ul class="list-inline mb-0">
                          <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                          <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-6 text-right">
                      <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">Glare</a>.
                  </div>
              </div>
          </div>
      </footer>
  </div>
  <!-- Wrapper End-->

  <!-- Modal list start -->


 
  <!-- Backend Bundle JavaScript -->
  <script src="../assets/js/backend-bundle.min.js"></script>
  
  <!-- Table Treeview JavaScript -->
  <script src="../assets/js/table-treeview.js"></script>
  
  <!-- Chart Custom JavaScript -->
  <script src="../assets/js/customizer.js"></script>
  
  <!-- Chart Custom JavaScript -->
  <script async="" src="../assets/js/chart-custom.js"></script>
  <script src="../assets/js/charts/01.js?v=1.0.1"></script>
  <script src="../assets/js/charts/02.js?v=1.0.1"></script>
  <!-- Chart Custom JavaScript -->
  <script async="" src="../assets/js/slider.js"></script>
  
  <!-- app JavaScript -->
  <script src="../assets/js/app.js?v=1.0.1"></script>
</body>

</html>