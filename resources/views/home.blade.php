@extends('layout')

@section('title','Home')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary py-4"> Desarrollo web </h1>
            <hr>
            <h2 class="display-9"> Todo a la nube </h2>
                <p class="lead text-secondary">El desarrollo web tiene mucho 
                    futuro, para los proximos años, porque existe una gran
                    tendencia a mover todo tipo de desarrollo a la nube y tener 
                    las aplicaciones y con ella la data siempre disponibles, compatibles con todos
                    los dispositivos y sin necesidad de tener nada instalado en
                    nuestros equipos.</p>
            
                               
        </div>
        <div class="col-12 col-lg-6 py-5">
            <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
        </div>
    </div>
    <h2 class="display-9"> Desarrollo de APIs REST </h2>
                <p class="lead text-secondary">Uno de los desarrollos web mas 
                    comunes en la actualidad es el desarrollo de APIs RESTful,
                    servicios web, o incluso microservicios. Ete tipo de desarrollo
                    web seguirá creciendo cada año.</p>
            <h2 class="display-9">Back y front separados </h2>
                <p class="lead text-secondary">La separación del backend y 
                    el frontend es una tendencia muy fuerte . De forma que
                    ya no lo tendremos todo mezclado si no que nos encargaremos
                    de desarrollar de forma separada y aislada las dos partes
                    de una aplicación web.</p>
            <h2 class="display-9">Web apps SPA</h2>
                <p class="lead text-secondary">El desarrollo de aplicaciones web 
                    de una sola página(SPA) seguirá creciendo este año, y es la 
                    parte frontend del desarrollo de una aplicación web moderna.</p>
            <h2 class="display-9">Frameworks de desarrollo</h2>
                <p class="lead text-secondary">La gran demanda del desarrollo con 
                    frameworks ya es un hecho. El desarrollo en lenguajes como 
                    JavaScript, vue.js y en frameworks de desarrollo web 
                    para PHP como Laravel cada vez se comenzarán mas 
                    desarrollos con estas tecnologías y las empresas los solicitarán
                     mucho más de lo que ya lo hacen.</p>
                     <a class="btn btn-lg btn-block btn-primary" 
                     href="{{ route('contact')}}">Contactame</a>
                     <a class="btn btn-lg btn-block btn-outline-primary" 
                     href="{{ route('projects.index')}}">Portafolio</a>  
</div>
@endsection