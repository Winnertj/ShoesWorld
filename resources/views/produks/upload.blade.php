@extends('layouts.app') 
@section('content') 

<div class="bg"><div class="isi">
		<center><h3> UPLOAD <h3></center>
	</div>
<p><br>
	{!! Form::open(['action' => 'ProdukController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<center><div class="form-group">
			<h4>{{Form::label('merek', 'Merek Sepatu')}}</h4>
			{{Form::text('merek', '',['class' => 'form-control','placeholder' => 'Merek'])}}
		</div>
		<div class="form-group">
			<h4>{{Form::label('ukuran', 'Ukuran Sepatu')}}</h4>
			{{Form::text('ukuran', '',['class' => 'form-control','placeholder' => 'Ukuran'])}}
		</div>
		<div class="form-group">
			<h4>{{Form::label('warna', 'Warna Sepatu')}}</h4>
			{{Form::text('warna', '',['class' => 'form-control','placeholder' => 'Warna'])}}
		</div>
		<div class="form-group">
			<h4>{{Form::label('description', 'Deskripsi Sepatu')}}</h4>
			{{Form::textarea('description', '',['class' => 'form-control','placeholder' => 'Deskripsi'])}}
		</div>
		<div class="form-group">
			<h4>{{Form::label('harga', 'Harga Sepatu')}}</h4>
			{{Form::number('harga', '',['class' => 'form-control','placeholder' => 'Harga'])}}
		</div>
		<div class="form-group">
			{{Form::file('gambar')}}
		</div>
		{{Form::submit('Upload',['class'=>'btn btn-primary'])}}</center>
	{!! Form::close() !!}
	</div>
@endsection