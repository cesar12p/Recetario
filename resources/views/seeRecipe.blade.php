@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="container px-lg-5 alert-warning text-center">
        <strong>{{$recipe->title}}</strong>
        <div class="row mx-lg-n5 p-3 mb-2">            
            
            <img src="/home/see/fetch_image/{{ $recipe->id }}" class="rounded mx-auto d-block" alt="...">  
            
            
        </div>

        <div class="panel panel-primary mb-10">
            <div class="panel-heading">Ingredientes:</div>
            <div class="panel-body">
                {{$recipe->ingredients}}
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">Procedimiento:</div>
            <div class="panel-body">
                {{$recipe->instructions}}
            </div>
        </div>
        
    </div>
@endsection
