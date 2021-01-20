@extends('layouts.app')

@section('content')
<form action="" method="post">
<div class="container-lg alert-warning">
	<div class="row">
		<div class="col-md-11 mb-3">
            <input  type="text" class="form-control text-center mb-3" value="{{$Datos[0]->title}}">
            
			<div class="row">
				<div class="col-md-6 text-center text-primary">
                    <img src="image/fetch_image/{{ $Datos[0]->id}}"  class="img-fluid"  />
				</div>
				<div class="col-md-6">
					<h5 class="text-center">
						Ingredientes
					</h5>
					<dl>
                        <textarea class="form-control" aria-label="With textarea" rows="5">{{$Datos[0]->ingredients}}</textarea>
						
					</dl>
				</div>
			</div>
			<h5 class="text-center">
				Proceso
			</h5>
			<textarea class="form-control" aria-label="With textarea" rows="8">{{$Datos[0]->instructions}}</textarea>
        </div>
        <div class="col-md-1">
        <button type="button" class="btn"><img src="https://img.icons8.com/color/48/000000/save--v2.png"/>Guardar</button>
        <button type="button" class="btn"><img src="https://img.icons8.com/fluent/48/000000/cancel.png"/>Cancelar</button>
        </div>
	</div>
</div>
</form>
@endsection
