@extends('layouts.app')
@section('content')
<div class="bg">
<div class="konten">
        <h2>{{$produk->merek}}</h2>
        <h5>Written on {{$produk->created_at}}</h5>
        <img style="width:50%" src="/storage/gambar/{{$produk->gambar}}"><p>
        <h5><p>Ukuran : {{$produk->ukuran}}</p>
        <p>Warna : {{$produk->warna}}</p>
        <p>{{$produk->description}}</p>
        <p>Harga : {{$produk->harga}}</p></h5>
        <a href="/produk/{{$produk->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action' => ['ProdukController@destroy',$produk->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
		    {{Form::hidden('_method', 'DELETE')}}
		    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
</div></div>
@endsection