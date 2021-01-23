@extends('layouts.app')

@section('content')
@if (Route::has('login'))
                    @auth
                        <div class="container ">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card alert-info">
                            
                                        <div class="card-header alert-dark text-center mb-2">
                                            <strong>{{ $Recipes[0]->title }}</strong>
                                        </div>
                                        
                                        <div class="container alert-info">
                                            <div class="row ">
                                                <div class="col-12 col-lg-6 text-center">
                                                    <img src="store_image/fetch_image/{{ $Recipes[0]->id}}"  class="rounded-circle" width="50%" />
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    Igredientes
                                                    <textarea class="form-control bg-light text-dark" name="ingredients" rows="7" readonly> {{ $Recipes[0]->ingredients }}</textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 mb-2">
                                                Proceso
                                                <textarea class="form-control bg-light text-dark" name="instructions" rows="7"  readonly>{{ $Recipes[0]->instructions}}</textarea>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    @else
                        No estoy logeado
                    @endauth
            @endif
@endsection