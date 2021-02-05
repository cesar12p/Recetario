@extends('layouts.app')

@section('content')
@if (Route::has('login'))
                    @auth
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                            
                                        <div class="card-header alert-dark">
                                            <input class="form-control form-control-lg text-center" name="title" type="text" value="{{ $Recipes[0]->title }}">
                                        </div>
                                        
                                        <div class="container alert-info">
                                            <div class="row">
                                                <div class="col-12 col-lg-6 text-center">
                                                    <img src="store_image/fetch_image/{{ $Recipes[0]->id}}"  class="img-thumbnail" width="275" />
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    Igredientes
                                                    <textarea class="form-control" name="ingredients" rows="7" > {{ $Recipes[0]->ingredients }}</textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 mb-2">
                                                Proceso
                                                <textarea class="form-control" name="instructions" rows="7"  >{{ $Recipes[0]->instructions}}</textarea>
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