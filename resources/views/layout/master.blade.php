<!doctype html>
<html lang="en" class="h-100">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.101.0">
      <title>Bootstrap v5.2</title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <link href="{{URL::to('css/main.css')}}" rel="stylesheet">
    </head>
    <body class="d-flex flex-column h-100">
    
        @include('layout.header')


        <!-- Begin page content -->
        @yield('content')
        
        @include('layout.footer')
        


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
        @yield('script')
      
    </body>
</html>
