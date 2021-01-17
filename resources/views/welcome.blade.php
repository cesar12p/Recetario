<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <!--NavBar-->
        <nav class="navbar navbar-light bg-warning">
            
            <a class="navbar-brand" href="#">
            <img src="https://img.icons8.com/officel/80/000000/cook-male.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            MisRecetas.com
            </a>
            @if (Route::has('login'))
                    @auth
                        <a class="nav-link" href="{{ url('/home') }}">Mis Recetas <span class="sr-only">(current)</span></a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion <span class="sr-only">(current)</span></a>

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">Registrarme<span class="sr-only">(current)</span></a>
                        @endif
                    @endauth
            @endif
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            Ultimas Recetas Agregadas
                        </div>
        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @foreach($recipes as $recipe)
                            <!--Seccion de Recetas recientes-->
                            <div class="container">
                                <div class="row">
                                    <!--Columna Titulo-->
                                    <div class="col-12 col-lg-3">
                                        <p>{{ $recipe->title}}</p>
                                    </div>
                                    
                                    <!--Columna Imagen-->
                                    <div class="col-12 col-lg-3">
                                        <img src="publicRecipes/fetch_image/{{ $recipe->id }}"  class="img-thumbnail" width="75" />
                                    </div>
                                   
                                </div>
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html> 
