@extends('layouts.header')

@section('title', 'Kit Digital')

@section('description', 'En este Kit Digital podrás obtener todas las herramientas necesarias para generar productos oficiales del Servicio Local de Educación Pública Andalién Sur. Además, encontrarás logos, icnografías y fuentes aprobadas por las Normas Gráficas del SLEP, para que puedas generar material en tu establecimiento.')

@section('content')

    <div class="pb-4">
        <div class="row">
            @if ($data->isNotEmpty())
                @foreach ($data as $item)
                    <!-- Tarjeta -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-2">
                        <div class="card card-digital">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <h6 class="card-subtitle text-muted"><!-- Fecha --></h6>
                                <div style="bottom: 1rem; position: absolute;">
                                    <p class="card-text">
                                        <img src="{{ asset('images/digital/' . $item->formato->url) }}" width="100px">
                                    </p>
                                    <a href="{{ $item->url }}" type="button" @if($item->descarga) download="{{ $item->name }}" @else target="_blank" @endif class="btn btn-outline-celeste">
                                        <i class="fa fa-cloud-download" aria-hidden="true"></i> Descargar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12 mt-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <div>No existen archivos</div>
                            <i class="fa fa-archive fa-2x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    
@endsection