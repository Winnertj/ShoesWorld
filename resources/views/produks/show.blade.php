@extends('layouts.app')
@section('content')
<div class="bg">
<div class="konten">
        <h2>{{$produk->merek}}</h2>
        <h6>Written on {{$produk->created_at}}</h6>
        <img style="width:50%" src="/storage/gambar/{{$produk->gambar}}"><p>
        <h5><p>Ukuran : {{$produk->ukuran}}</p>
        <p>Warna : {{$produk->warna}}</p>
        <p>Harga : {{$produk->harga}}</p>
        <p>{{$produk->description}}</p></h5>
        <a href="/produk/{{$produk->id}}/edit" class="btn btn-primary">Edit</a>
        {!!Form::open(['action' => ['ProdukController@destroy',$produk->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
		    {{Form::hidden('_method', 'DELETE')}}
		    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        {!!Form::open(['action' => ['BestController@store'], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'POST')}}
                    {{Form::hidden('id', $produk->id)}}
		    {{Form::submit('Best Seller', ['class' => 'btn btn-success'])}}
        {!!Form::close()!!}
</div></div>
@endsection