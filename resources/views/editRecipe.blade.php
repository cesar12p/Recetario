@extends('layouts.app')

@section('content')
    <form action="{{ route('home.saveEdit') }}" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="card alert-info">
                        <div class="card-header alert-dark mb-3">
                            <input type="text" class="form-control text-center mb-3" name="title"
                                value="{{ old('title', $Datos[0]->title) }}">
                            @if ($errors->first('title'))
                                <div class="text-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="container ">
                            <div class="row ">
                                <div class="col-12 col-lg-6 text-center">
                                    <img src="image/fetch_image/{{ $Datos[0]->id }}" class="rounded-circle mb-3"
                                        width="50%" />
                                    <input type="file" name="image" id="file" />
                                    <hr>
                                    <div id="preview"></div>
                                    @if ($errors->first('image'))
                                        <div class="text-danger">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                                <div class="col-12 col-lg-6">
                                    Ingredientes
                                    <textarea class="form-control" aria-label="With textarea" name="ingredients"
                                        rows="5">{{ old('ingredients', $Datos[0]->ingredients) }}</textarea>
                                    @if ($errors->first('ingredients'))
                                        <div class="text-danger">{{ $errors->first('ingredients') }}</div>
                                    @endif
                                </div>
                                <div class="col-12 text-center mb-3 ">
                                    Proceso
                                    <textarea class="form-control" aria-label="With textarea" name="instructions"
                                        rows="8">{{ old('instructions', $Datos[0]->instructions) }}</textarea>
                                    @if ($errors->first('instructions'))
                                        <div class="text-danger">{{ $errors->first('instructions') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                    <input type="hidden" name="idRecipe" value="{{ $Datos[0]->id }}">
                    @csrf
                    <button type="submit" class="btn"><img
                            src="https://img.icons8.com/color/48/000000/save--v2.png" />Guardar</button>
    </form>
    <form action="{{ route('home') }}">
        <button type="submit" class="btn"><img src="https://img.icons8.com/fluent/48/000000/cancel.png" />Cancelar</button>
    </form>
    </div>
    </div>
    </div>
@section('scripts')
    <script src="{{ asset('js/visualizador.js') }}"></script>
@endsection
@endsection
