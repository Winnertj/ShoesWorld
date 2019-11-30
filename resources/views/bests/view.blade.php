@extends('layout');

@section('content');
    <h1> Best Seller </h1>
    @if ($best)
        <h1> Best Seller </h1>
        <small> Merek : </small>
        <a href="/bests/{{best->id}}/upload"> Edit </a>
    @else
        <h1> tidak ada yang diedit </h1>
    @endif
@endsection