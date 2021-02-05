@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-1">
                <a href="{{ url('Add') }}"><button type="submit" class="btn"><img src="https://img.icons8.com/color/48/4a90e2/plus--v1.png"/>Nueva Receta</button></a>
            </div>
            <div class="col-md-8">
                <div class="card alert-info">
                    <div class="card-header alert-dark mb-3 text-center">
                        <strong>Mis Recetas</strong>
                    </div>
                    <div class="container ">
                        <div class="row p-1 mb-1">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @foreach($recipes as $recipe)
                            <div class="col-3 col-md-3 text-center mb-2 bg-white text-dark">
                                <a class="text-white" href="{{ route('home.show', ['id'=>$recipe->id,'title'=>$recipe->title]) }}">
                                    <img src="store_image/fetch_image/{{ $recipe->id }}"  class="rounded-circle" width="100%" />   
                                </a>
                            </div>
                            <div class="col-3 col-md-5 text-center mb-2 bg-white text-dark">
                                <a href="{{ route('home.show', ['id'=>$recipe->id,'title'=>$recipe->title]) }}">
                                <strong>{{ $recipe->title}}</strong>
                                </a>
                            </div>
                            <div class="col-3 col-md-2 text-right mb-2 bg-white text-dark">
                                <form action="{{route('home.edit', ['id'=>$recipe->id])}}">
                                <button type="submit" class="btn"><img src="https://img.icons8.com/officel/40/4a90e2/edit-property.png"/>Editar</button>
                                </form>
                            </div>

                            <div class="col-3 col-md-2 text-right mb-2 bg-white text-dark">
                                <form action="{{route('home.delete', $recipe->id)}}">
                                @csrf
                                <button type="submit" class="btn"><img src="https://img.icons8.com/fluent/48/000000/cancel.png"/>Eliminar</button>

                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection