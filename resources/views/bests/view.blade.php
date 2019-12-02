@extends('layouts.app')
@section('content')
<center><div class="bg">
    <h3> Best Seller</h3>
    <a href="/produk/" class="btn btn-info">Choose Product</a>
    <div class="konten">
    @if(count($best) > 0)
        @foreach($best as $best)
        <div class="box">
            <img style="width:100%" src="/storage/gambar/{{$best->gambar}}">
            <h3>{{$best->merek}}</h3>
            <small>Written on {{$best->created_at}}</small>
            {!!Form::open(['action' => ['BestController@destroy',$best->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>
        @endforeach
    @else
        <h2>Tidak Ada Best Seller</h2>
    @endif
</div>
</div></center>
@endsection