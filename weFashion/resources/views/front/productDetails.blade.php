@extends('layouts.master')

@section('content')

    @include('components.product', ['product' => $product])
@endsection