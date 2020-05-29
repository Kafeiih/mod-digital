<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SLEP Andalién Sur</title>
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
            @yield('content')
        </main>

        <footer class="mt-auto text-center">Unidad de Informatica - SLEP Andalién Sur</footer>
    </div>
</body>
</html>