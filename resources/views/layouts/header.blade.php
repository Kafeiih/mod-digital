<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Los Servicios Locales de Educación Pública serán los sostenedores educacionales que velarán por entregar una educación integral, de calidad y con pertinencia local, centrado en los aprendizajes para el siglo XXI, que entregue oportunidades a todos los niños, niñas y jóvenes en el país para desarrollarse." />
    <meta name="keywords" content="educacion, biobio, octava, region, chile, liceo, jardin, infantil, escuela, andalien, sur, servicio, local, publica, concepción, chiguyante, hualqui, florida, "/>
    <title>@yield('title') - SLEP Andalién Sur</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <div class="bg-cover">
        <div class="container @yield('estilo') pb-5">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logotipo.png') }}" height="150" alt="Andalién Sur"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="row" style="width: 100%;">
                    <div class="col-12 mb-4">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <ul class="navbar-nav ml-auto">
                                @auth
                                <li class="nav-item dropdown">                            
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i> Panel de Control
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                        <a class="dropdown-item" href="#">Suite</a>
                                        <a class="dropdown-item" href="#">Cerrar Sesion</a>
                                    </div>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}"">
                                        <i class="fa fa-home" aria-hidden="true"></i> Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i> Ingresar
                                    </a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                    </div>

                    <div class="col-12">
                        <span class="navbar-text">@yield('description')</span>
                    </div>

                </div>
            </nav>

        @yield('content')

        </div>    
    </div>

    <footer class="py-5 pt-5">
        <div class="row container mx-auto">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
                <small class="d-block mb-3 text-muted">SLEP</small>
            </div>
            <div class="col-4 col-md">
                <h5>Información</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados?p_p_id=pdtorganismos_WAR_pdtorganismosportlet&orgcode=cbe90eda5ba0175b85dba81b4c8f59e6">Ley Transparecia</a></li>
                    <li><a class="text-muted" href="https://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=AJ024">Gobierno Transparente</a></li>
                </ul>
            </div>
            <div class="col-4 col-md">
                <h5>Redes Sociales</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://www.facebook.com/EducacionAndalienSur/">Facebook</a></li>
                    <li><a class="text-muted" href="https://twitter.com/edu_andalien">Twitter</a></li>
                    <li><a class="text-muted" href="https://www.facebook.com/Radioandaliensur">Radio Andalién Sur</a></li>
                </ul>
            </div>
            <div class="col-4 col-md">
                <h5>Sitio</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="/">Intranet</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157282406-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    
    gtag('config', 'UA-157282406-1');
</script>
</html>