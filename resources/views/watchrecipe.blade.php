@extends('layouts.app')

@section('content')

Aqui editas recetas
@if (Route::has('login'))
                    @auth
                        Estoy logeado
                    @else
                        No estoy logeado
                    @endauth
            @endif
@endsection