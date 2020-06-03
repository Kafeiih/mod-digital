<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="bg-cover">
        <div class="container">
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
                                    <a class="nav-link disabled" href="#">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i> Home
                                        <span class="sr-only">(current)</span>
                                        <i class="fa fa-sign-in " aria-hidden="true"></i> Ingresar
                                    </a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 prueba">
                        <span class="navbar-text">
                            @yield('description')
                        </span>
                    </div>
                </div>
            </nav>
        </div>

        <div style="top:20rem" class="col-md-12">
            <div class="text-center">
                <div class="col-xl-5 col-mg-6 mx-auto">
                    <h1 class="display-4">Andalién Sur</h1>
                    <p class="lead">Servicio Local de Educación Pública a cargo de la administración de los jardines, escuelas y liceos públicos de Concepción, Chiguayante, Florida y Hualqui.</p>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 mx-auto">
                    <a class="btn btn-portaline-rojo mt-2" href="/kitdigital">Kit Digital</a>
                    <a class="btn btn-portaline-verde mt-2" href="/remunerciones">Remuneraciones</a>
                    <a class="btn btn-portaline-amarillo mt-2" href="/correo">Correo</a>
                    <a class="btn btn-portaline-azul mt-2" href="/apoyodocente">Apoyo Docente</a>
                    <a class="btn btn-portaline-celeste mt-2" href="/">Prueba</a>
                </div>

            </div> 
        </div>       
               
    </div>


    <footer class="py-5" style="background-color:#3abff0">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
                <small class="d-block mb-3 text-muted">Jolah</small>
            </div>
            <div class="col-4 col-md">
                <h5>Información</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados?p_p_id=pdtorganismos_WAR_pdtorganismosportlet&orgcode=cbe90eda5ba0175b85dba81b4c8f59e6">Ley Transparecia</a></li>
                    <li><a class="text-muted" href="https://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=AJ024">Gobierno Transparente</a></li>
                    <li><a class="text-muted" href="">Radio Andalién Sur</a></li>
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
                    <li><a class="text-muted" href="#">Business</a></li>
                    <li><a class="text-muted" href="#">Education</a></li>
                    <li><a class="text-muted" href="#">Government</a></li>
                    <li><a class="text-muted" href="#">Gaming</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>