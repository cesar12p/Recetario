@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card alert-info">
                <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
                <div class="card-header alert-dark">
                    Titulo
                    <input class="form-control form-control-lg" name="title" type="text" placeholder="">
                    @if ($errors->first('title'))
                    <div class="text-danger">{{$errors->first('title')}}</div>
                  @endif
                </div>
                
                <div class="container ">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            Igredientes
                            <textarea class="form-control" name="ingredients" rows="3"></textarea>
                            @if ($errors->first('ingredients'))
                            <div class="text-danger">{{$errors->first('ingredients')}}</div>
                          @endif
                        </div>
                        <div class="col-12 col-lg-6">
                            Proceso
                            <textarea class="form-control" name="instructions" rows="3"></textarea>
                            @if ($errors->first('instructions'))
                            <div class="text-danger">{{$errors->first('instructions')}}</div>
                          @endif
                        </div>
                    </div>
                    
                    <div class="col-12">
                        Adjuntar Foto
                        <div class="border">
                            <input type="file" name="image"/>
                            @if ($errors->first('image'))
                            <div class="text-danger">{{$errors->first('image')}}</div>
                          @endif
                        </div>
                        
                    </div>
                    <br>
                    <div class="col text-center">
                    @csrf
                    <button type="submit" class="btn"><img src="https://img.icons8.com/color/48/000000/save--v2.png"/>Guardar</button>
                    </div>
                    
                </div>
            </form>
                
            </div>
        </div>
    </div>
</div>

@endsection