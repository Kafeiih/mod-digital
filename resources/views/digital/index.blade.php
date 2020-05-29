@extends('layouts.header')

@section('title', 'Kit Digital')

@section('content')
    <div class="mt-4">
        <div class="row">
            @if ($data)
                @foreach ($data as $item)
                    <!-- Tarjeta -->
                    <div class="col-md-3 mt-2">
                        <div class="card card-digital">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <h6 class="card-subtitle text-muted">
                                    <!-- Fecha -->
                                </h6>
                                <div style="bottom: 1rem; position: absolute;">
                                    <img src="{{ asset('images/digital/pdf.svg') }}" width="100px" alt="">
                                    
                                    <p class="card-text">
                                        <!-- Descripcion -->
                                    </p>
                                    <a href="{{ $item->url }}" @if($item->descarga) download="{{ $item->name }}" @else target="_blank" @endif class="btn btn-outline-primary card-link" type="button">
                                        <i class="fa fa-cloud-download" aria-hidden="true"></i> Descargar
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- /Tarjeta -->
                @endforeach
            @else

            @endif
        </div>
    </div> 
@endsection