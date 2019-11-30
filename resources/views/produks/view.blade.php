@extends('layouts.app') 
@section('content') 

<center><div class="bg">
<h3>Daftar Produk</h3>
<div class="konten">
    @if(count($produk) > 0)
        @foreach($produk as $produk)
        <div class="box">
            <img style="width:300px;height:250px" src="/storage/gambar/{{$produk->gambar}}">
            <h3><a href="/produk/{{$produk->id}}">{{$produk->merek}}</a></h3>
            <h5><small>Written on {{$produk->created_at}}</small>
            <p>{{$produk->description}}</p></h5>
        </div>
        @endforeach
    @else
        <h1>Tidak Ada Data.</h1>
    @endif
</div>
</div></center>
@endsection
