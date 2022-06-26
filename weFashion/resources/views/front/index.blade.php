@extends('layouts.master')

@section('content')
    <h1>Tous les produits</h1>

    <div>
        @include('components.count', ['count' => $count])
        @include('components.products', ['products'=>$products])
        @include('components.pagination', ['products' => $products])

    </div>
@endsection