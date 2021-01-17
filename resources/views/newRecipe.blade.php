@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
                <div class="card-header">
                    Titulo
                    <input class="form-control form-control-lg" name="title" type="text" placeholder="">
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            Igredientes
                            <textarea class="form-control" name="ingredients" rows="3"></textarea>
                        </div>
                        <div class="col-12 col-lg-6">
                            Proceso
                            <textarea class="form-control" name="instructions" rows="3"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        Adjuntar Foto
                        <div class="border">
                            <input type="file" name="image" accept=".jpg,.png"/>
                        </div>
                        
                    </div>
                    <br>
                    <div class="col text-center">
                    @csrf
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    
                </div>
            </form>
                
            </div>
        </div>
    </div>
</div>

@endsection