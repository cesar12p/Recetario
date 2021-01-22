@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="container px-lg-5 alert-warning text-center">
        <strong>Ultimas Recetas Agregadas</strong>
        <div class="row mx-lg-n5 p-3 mb-2">            
            @foreach($recipes as $recipe)
                <div class="col-4 py-3 px-lg-5 border bg-info text-white text-center">
                    <a class="text-white" href="{{route('home.see', $recipe->id)}}">
                        <img src="publicRecipes/fetch_image/{{ $recipe->id }}"  class="rounded-circle" style="height: 7rem;" width="100%" />
                        {{ $recipe->title}}
                    </a>
                </div>                          
            @endforeach     
        </div>
        <div class="col-12 text-center">
            {{ $recipes->links() }}
        </div>
    </div>
@endsection
