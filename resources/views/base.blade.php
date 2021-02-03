<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>@yield('title')</title>
        <style>
            body{
                background-image: url(https://cdn.pixabay.com/photo/2020/12/23/14/41/forest-5855196_960_720.jpg);
                background-size: cover;
                position: relative;
                padding: 30px;
            }
            h1{
                background: linear-gradient(#ffffff59, #00000052);
                width: 100%;
                padding: 10px 5px 10px;
                color: rgb(114, 1, 1);
            }
        </style>
    </head>
    <body>
        @include('components.header')
        <div class="container mx-auto m-4">
            {{-- @include('components.alert') --}}
            @yield('content')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
