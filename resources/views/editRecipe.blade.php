@extends('layouts.app')

@section('content')
<form action="{{route('home.saveEdit')}}" method="POST" enctype="multipart/form-data">
<div class="container-lg alert-warning">
	<div class="row">
		<div class="col-md-11 mb-3">
            <input  type="text" class="form-control text-center mb-3" name="title" value="{{$Datos[0]->title}}">
            
			<div class="row">
				<div class="col-md-6 text-center text-primary">
                    <img src="image/fetch_image/{{ $Datos[0]->id}}"  class="img-fluid"  />
                    <input type="file" name="image" accept=".jpg,.png"/>
				</div>
				<div class="col-md-6">
					<h5 class="text-center">
						Ingredientes
					</h5>
					<dl>
                        <textarea class="form-control" aria-label="With textarea" name="ingredients" rows="5">{{$Datos[0]->ingredients}}</textarea>
						
					</dl>
				</div>
			</div>
			<h5 class="text-center">
				Proceso
			</h5>
			<textarea class="form-control" aria-label="With textarea" name="instructions" rows="8">{{$Datos[0]->instructions}}</textarea>
        </div>
        <div class="col-md-1">
        <input type="hidden" name="idRecipe" value="{{$Datos[0]->id}}">
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
