@extends('layouts.app') 
@section('content') 

<div class="bg"><div class="isi">
		<center><div class="tulis"> UPLOAD </div></center>
	</div>
<p><br>
	{!! Form::open(['action' => 'PostController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<center><div class="form-group">
			{{Form::label('merek', 'Merek Sepatu')}}
			{{Form::text('merek', '',['class' => 'form-control','placeholder' => 'Merek'])}}
		</div>
		<div class="form-group">
			{{Form::label('ukuran', 'Ukuran Sepatu')}}
			{{Form::number('ukuran', '',['class' => 'form-control','placeholder' => 'Ukuran'])}}
		</div>
		<div class="form-group">
			{{Form::label('warna', 'Warna Sepatu')}}
			{{Form::text('warna', '',['class' => 'form-control','placeholder' => 'Warna'])}}
		</div>
		<div class="form-group">
			{{Form::label('description', 'Deskripsi Sepatu')}}
			{{Form::textarea('description', '',['class' => 'form-control','placeholder' => 'Deskripsi'])}}
		</div>
		<div class="form-group">
			{{Form::label('harga', 'Harga Sepatu')}}
			{{Form::number('harga', '',['class' => 'form-control','placeholder' => 'Harga'])}}
		</div>
		<div class="form-group">
			{{Form::file('gambar')}}
		</div>
		{{Form::submit('Upload',['class'=>'btn btn-primary'])}}</center>
	{!! Form::close() !!}
	</div>
@endsection