@extends('layouts.app');
@section('content');
<center><div class="bg">
    <h3> Best Seller </h3>
    <div class="konten">
    @if(count($best) > 0)
        @foreach($best as $best)
        <div class="box">
            <img style="width:100%" src="/storage/gambar/{{$best->gambar}}">
            <h3><a href="/produk/{{$best->id}}">{{$best->merek}}</a></h3>
            <small>Written on {{$best->created_at}}</small>
            <p>{{$best->description}}</p>
        </div>
        @endforeach
    @else
        <h2>Tidak Ada Best Seller</h2>
        <h3><a href="/produk/"> Choose Product </a></h3>
    @endif
</div>
</div></center>
@endsection