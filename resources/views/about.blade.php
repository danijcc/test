@extends('layout')

@section('title','About')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary py-4"> Quien soy </h1>
            <hr>
            <h2 class="display-9"> Dani Jose Colmenares Cadiz </h2>
                <p class="lead text-secondary">Desarrollador web con un historial 
                    demostrado de trabajo en la industria de servicios y tecnología
                     de la información. Laravel, Full-Stack Development, Vue.js, JScript
                      y AJAX..</p>
                     
                               
          </div>
        <div class="col-11 col-lg-5">
            <img class="img-fluid mb-1" src="/img/perfil.png" alt="Desarrollo Web">
        </div>
                     <a class="btn btn-lg btn-block btn-primary" 
                     href="{{ route('contact')}}">Contactame</a>
                     <a class="btn btn-lg btn-block btn-outline-primary" 
                     href="{{ route('projects.index')}}">Portafolio</a>  
    </div>
</div>
@endsection