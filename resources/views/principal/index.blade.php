@extends('layouts.header')

@section('estilo', 'principal')

@section('title', 'Pagina principal')

@section('content')

    <div class="sector-principal col-md-12">
        <div class="text-center">
            <div class="col-xl-8 col-md-12 mx-auto">
                <h1 class="title">Andalién Sur</h1>
                <p class="lead">Servicio Local de Educación Pública a cargo de la administración de los jardines, escuelas y liceos públicos de Concepción, Chiguayante, Florida y Hualqui.</p>
            </div>
            <div class="links col-lg-12 col-md-12 mx-auto">
                <a class="btn btn-portaline-rojo mt-2" href="/kitdigital">Kit Digital</a>
                <a class="btn btn-portaline-verde mt-2" href="http://intranetandalien.smc.cl/">Remuneraciones</a>
                <a class="btn btn-portaline-amarillo mt-2" href="https://mail.google.com/">Correo</a>
                <a class="btn btn-portaline-azul mt-2" href="{{ url('consentimiento') }}">Classroom</a>
            </div>
        </div> 
    </div>

@endsection