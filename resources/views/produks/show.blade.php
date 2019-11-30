@extends('layouts.app')
@section('content')
<div class="bg">
<div class="konten">
        <h1>{{$post->merek}}</h1>
        <small>Written on {{$post->created_at}}</small><br>
        <img style="width:50%" src="/storage/gambar/{{$post->gambar}}">
        <p>Ukuran : {{$post->ukuran}}</p>
        <p>Warna : {{$post->warna}}</p>
        <p>{{$post->description}}</p>
        <p>Harga : {{$post->harga}}</p>
        <a href="/view/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action' => ['PostController@destroy',$post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
		    {{Form::hidden('_method', 'DELETE')}}
		    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
</div></div>
@endsection