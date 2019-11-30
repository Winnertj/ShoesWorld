@extends('layouts.app') 
@section('content') 

<div class="bg"><div class="isi">
		<center><div class="tulis"> EDIT </div></center>
	</div>
<p><br>
	{!! Form::open(['action' => ['PostController@update',$post->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<center><div class="form-group">
			{{Form::label('merek', 'Merek Sepatu')}}
			{{Form::text('merek', $post->merek,['class' => 'form-control','placeholder' => 'Merek'])}}
		</div>
		<div class="form-group">
			{{Form::label('ukuran', 'Ukuran Sepatu')}}
			{{Form::number('ukuran', $post->ukuran,['class' => 'form-control','placeholder' => 'Ukuran'])}}
		</div>
		<div class="form-group">
			{{Form::label('warna', 'Warna Sepatu')}}
			{{Form::text('warna', $post->warna,['class' => 'form-control','placeholder' => 'Warna'])}}
		</div>
		<div class="form-group">
			{{Form::label('description', 'Deskripsi Sepatu')}}
			{{Form::textarea('description', $post->description,['class' => 'form-control','placeholder' => 'Deskripsi'])}}
		</div>
		<div class="form-group">
			{{Form::label('harga', 'Harga Sepatu')}}
			{{Form::number('harga', $post->harga,['class' => 'form-control','placeholder' => 'Harga'])}}
		</div>
		<div class="form-group">
			{{Form::file('gambar')}}
		</div>
    {{Form::hidden('_method','PUT')}}
	{{Form::submit('Upload',['class'=>'btn btn-primary'])}}</center>

	{!! Form::close() !!}
	</div>
@endsection