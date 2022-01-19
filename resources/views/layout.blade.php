<!DOCTYPE html>
<html lang="en">
<head>
    <?php//aqui esriimos el contenido que queremos que se repita en todas las paginas?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Aprendible')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>
    <body>
        <div id="app" class="d-flex flex-column h-screen justify-content-between ">
                <header> 
                    @include('partials.nav')
                    @include('partials.session-status')
                </header>
                <main class="py-4"> 
                    @yield('content')
                </main>
                    
                <footer class="bg-white text-black-50 text-center py-3 shadow"> 
                     {{ config('app.name')}} | Copyright @ {{ date('Y')}}
                </footer>
        </div>
    </body>
</html>
