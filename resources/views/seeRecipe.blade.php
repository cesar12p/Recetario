@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card alert-info">
                    <div class="card-header alert-dark text-center mb-2">
                        <strong>{{$recipe->title}}</strong>
                    </div>
                    <div class="container alert-info">
                        <div class="row ">
                            <div class="col-12 col-lg-6 text-center">
                                <img src="/home/see/fetch_image/{{$recipe->id}}"  class="rounded-circle" width="50%" />
                            </div>
                            <div class="col-12 col-lg-6 text-center">
                                <strong class="">Igredientes</strong>
                                <textarea class="form-control bg-light text-dark" name="ingredients" rows="7" readonly> {{ $recipe->ingredients }}</textarea>
                            </div>
                        </div>
                        <div class="col-12 mb-2 text-center">
                            <strong>Proceso</strong>
                            <textarea class="form-control bg-light text-dark" name="instructions" rows="7"  readonly>{{ $recipe->instructions}}</textarea>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
