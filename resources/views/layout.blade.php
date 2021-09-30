<!DOCTYPE html>
<html lang="en">
<head>
    <?php//aqui esriimos el contenido que queremos que se repita en todas las paginas?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Aprendible')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
   @include('partials.nav')
   @include('partials.session-status')
    @yield('content')
    
  
</body>
</html>