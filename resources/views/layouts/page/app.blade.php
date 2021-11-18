<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/css/dataTables.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('datatable/js/dataTables.js')}}"></script>
</head>
<style>
    *{
        font-family: 'Poppins';
    }
    
</style>
<body style="background:#fff;">
    

        <nav class="navbar navbar-expand-md  navbar-dark" style="background: #0099ff;">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="#" style="font-size: 16px;font-weight:bold;">SMP PGRI CIRANJANG</a>

               
            </div>
            
        </nav>

        @yield('header')

    <div class="container mb-5">
        @yield('content')
    </div>

    

    @stack('scripts')
</body>
</html>