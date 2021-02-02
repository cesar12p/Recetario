@extends('layouts.app')

@section('content')
<form action="{{route('home.saveEdit')}}" method="POST" enctype="multipart/form-data">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card alert-info">
                <div class="card-header alert-dark mb-3">
                    <input  type="text" class="form-control text-center mb-3" name="title" value="{{$Datos->title}}">
                </div>
                <div class="container ">
                    <div class="row ">
                        <div class="col-12 col-lg-6 text-center">
                            <img src="image/fetch_image/{{ $Datos->id}}" class="rounded-circle mb-3"  width="50%"  />
                    		<input type="file" name="image" accept=".jpg,.png"/>
                        </div>
                        <div class="col-12 col-lg-6">
                            Ingredientes
							<textarea class="form-control" aria-label="With textarea" name="ingredients" rows="5">{{$Datos->ingredients}}</textarea>
                        </div>
                    	<div class="col-12 text-center mb-3 ">
                        	Proceso
                        	<textarea class="form-control" aria-label="With textarea" name="instructions" rows="8">{{$Datos->instructions}}</textarea>
                        </div>
					</div>
                </div> 
			</div>
		</div>
		<div class="col-md-1">
			<input type="hidden" name="idRecipe" value="{{$Datos->id}}">
			@csrf
			<button type="submit" class="btn"><img src="https://img.icons8.com/color/48/000000/save--v2.png"/>Guardar</button>
</form>
<form action="{{route('home')}}">
			<button type="submit" class="btn"><img src="https://img.icons8.com/fluent/48/000000/cancel.png"/>Cancelar</button>
</form>
		</div>
    </div>
</div>
@endsection
