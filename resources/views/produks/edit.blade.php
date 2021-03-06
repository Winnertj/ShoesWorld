@extends('layouts.app') 
@section('content') 
<div class="bg"><div class="isi">
		<center><h3> EDIT </h3></center>
	</div>
<p><br>
	{!! Form::open(['action' => ['ProdukController@update',$produk->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<center><div class="form-group">
			<h4>{{Form::label('merek', 'Merek Sepatu')}}</h4>
			{{Form::text('merek', $produk->merek,['class' => 'form-control','placeholder' => 'Merek'])}}
		</div>
		<div class="form-group">
			<h4>{{Form::label('ukuran', 'Ukuran Sepatu')}}</h4>
			{{Form::text('ukuran', $produk->ukuran,['class' => 'form-control','placeholder' => 'Ukuran'])}}
		</div>
		<div class="form-group">
			<h4>{{Form::label('warna', 'Warna Sepatu')}}</h4>
			{{Form::text('warna', $produk->warna,['class' => 'form-control','placeholder' => 'Warna'])}}
		</div>
		<div class="form-group">
			<h4>{{Form::label('description', 'Deskripsi Sepatu')}}</h4>
			{{Form::textarea('description', $produk->description,['class' => 'form-control','placeholder' => 'Deskripsi'])}}
		</div>
		<div class="form-group">
			<h4>{{Form::label('harga', 'Harga Sepatu')}}</h4>
			{{Form::number('harga', $produk->harga,['class' => 'form-control','placeholder' => 'Harga'])}}
		</div>
		<div class="form-group">
			{{Form::file('gambar')}}
		</div>
    {{Form::hidden('_method','PUT')}}
	{{Form::submit('Upload',['class'=>'btn btn-primary'])}}</center>

	{!! Form::close() !!}
	</div>
@endsection