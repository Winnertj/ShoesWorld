@extends('layouts.app');
@section('content');
    <h1> Best Seller </h1>
    @if ($best)
         Merek : 
    @else
        <h1> tidak ada yang diedit </h1>
    @endif
@endsection