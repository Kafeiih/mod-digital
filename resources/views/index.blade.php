@extends('layouts.portada')

@section('title', 'Portada')

@section('content')

    <div class="mb-auto">
        <main role="main">
            <div class="title mb-4">
                Andalién Sur
            </div>
    
            <div class="links">
                <a href="{{ url('kitdigital') }}">Kit Digital</a>
                <a href="http://intranetandalien.smc.cl/">Remuneraciones</a>
                <a href="https://mail.google.com/">Correo</a>
            </div>
        </main>
    </div>

@endsection