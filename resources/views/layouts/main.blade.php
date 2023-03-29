@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{'css/style.css'}}">



    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatable5.css') }}">
    
    
    <title>Document</title>

</head>
<body>
@include('shared/menu')
    @yield('contenido')


   <!--Aqui Ya Puedes Escribir-->
    <script src="{{mix('js/app.js')}}"></script>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jqueryta.js') }}"></script>
    <script src="{{ asset('js/datatable.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>