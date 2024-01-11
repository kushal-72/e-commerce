<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.1">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
      
      <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css">
      <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css">
      <link rel="stylesheet" href="../assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css"></head>
    </head>
   <body class=" ">
  <!-- loader Start -->
  <div id="loading">
        <div id="loading-center">
        </div>
  </div>
  <!-- loader END -->

  <div class="wrapper">
        {{$slot}}
    </div>

  <!-- Backend Bundle JavaScript -->
  <script src="../assets/js/backend-bundle.min.js"></script>
  
  <!-- Table Treeview JavaScript -->
  <script src="../assets/js/table-treeview.js"></script>
  
  <!-- Chart Custom JavaScript -->
  <script src="../assets/js/customizer.js"></script>
  
  <!-- Chart Custom JavaScript -->
  <script async src="../assets/js/chart-custom.js"></script>
  <script src="../assets/js/charts/01.js?v=1.0.1"></script>
  <script src="../assets/js/charts/02.js?v=1.0.1"></script>
  <!-- Chart Custom JavaScript -->
  <script async src="../assets/js/slider.js"></script>
  
  <!-- app JavaScript -->
  <script src="../assets/js/app.js?v=1.0.1"></script>
</body>

</html>