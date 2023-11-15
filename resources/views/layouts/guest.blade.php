<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('images/globalpolitcs.png')}}" type="image/x-icon">

        <title>CUCSH</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bold.css') }}">
        <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
        <!-- js -->
        <script src="{{ asset('js/perfect-scrollbar.min.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('js/apexcharts.js') }}" defer></script>
        <script src="{{ asset('js/dashboard.js') }}" defer></script>
        <script src="{{ asset('js/main.js') }}" defer></script>
        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   
    <script src="{{ asset('js/app.js') }}" defer></script>
   <!-- scripts javascript para tablas  en general -->
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
        <!-- responsivo para dispositivos -->
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>
        <!-- cnd para diseño de tablas  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
<!-- Archivo para graficas con chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
  <!-- Archivo del sidebar -->
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
</head>
<style>
    body {
        width: 100%;
        height: 100vh;
        font-family: sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .left-form {
        width: 50%;
        height: 100%;
        overflow: hidden;
        background: #fff url('../images/cucsh1.jpg') no-repeat;
        background-size: cover;
    }

    .right-form {
        width: 50%;
        height: 100%;
        padding: 20px;
        box-sizing: border-box;
        background-color: #f7f7f7;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-content {
        max-width: 400px;
        width: 100%;
        text-align: center;
    }
</style>
<body>
    <div class="left-form"></div>
    <div class="right-form">
        <div class="form-content">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
