@extends('layouts.app')

@section('content')
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
        @endsection
