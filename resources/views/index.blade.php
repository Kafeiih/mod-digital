<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada - SLEP Andalién Sur</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body class="portada">
    <div class="container d-flex w-100 h-100 mx-auto flex-column">
        <header class="mb-auto">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logotipo.png') }}" height="150" alt="Andalién Sur"></a>
            <nav class="navbar-brand nav-links">
                <div class="links">
                    @auth
                        <a href="{{ url('/home') }}">Panel de Control</a>
                    @else
                        <a href="{{ url('/login') }}">Ingresar</a>
                    @endauth
                </div>
            </nav>  
        </header>
        
        <main role="main" class="cover text-center">
            <div class="mb-auto">
                <main role="main">
                    <div class="title mb-4">
                        
                        Andalién Sur
                        <h6 class="card-subtitle text-muted">Servicio Local de Educación Pública a cargo de la administración de los jardines, escuelas y liceos públicos de Concepción, Chiguayante, Florida y Hualqui.</h6>
                    </div>
            
                    <div class="links">
                        <a class="btna rojo" href="{{ url('kitdigital') }}">Kit Digital</a>
                        <a class="btna verde" href="http://intranetandalien.smc.cl/">Remuneraciones</a>
                        <a class="btna amarillo" href="https://mail.google.com/">Correo</a>
                    </div>
                </main>
            </div>
        </main>

        <footer class="mt-auto text-center">Unidad de Informatica - SLEP Andalién Sur</footer>
    </div>
</body>
</html>