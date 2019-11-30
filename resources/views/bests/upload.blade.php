@extends('layouts.app') 
@section('content') 

<div class="bg"><div class="isi">
		<center><div class="tulis"> UPLOAD </div></center>
	</div>
<p><br>
	{!! Form::open(['action' => 'ProdukController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<center><div class="form-group">
			{{Form::label('merek', 'Merek Sepatu')}}
			{{Form::text('merek', '',['class' => 'form-control','placeholder' => 'Merek'])}}
		</div>
		<div class="form-group">
			{{Form::label('harga', 'Harga Sepatu')}}
			{{Form::number('harga', '',['class' => 'form-control','placeholder' => 'Harga'])}}
		</div>
		<div class="form-group">
			{{Form::file('gambar')}}
		</div>

        {{Form::Hidden('_method','PUT')}}
        {{Form::Hidden('_method','PATCH')}}
        {{Form::Hidden('_method','DELETE')}}
        
		{{Form::submit('Upload',['class'=>'btn btn-primary'])}}</center>
	{!! Form::close() !!}
	</div>
@endsection
    
