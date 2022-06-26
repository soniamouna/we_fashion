@extends('layouts.master')

@section('content')
<h1>Produits de la catégorie <span class="text-lowercase">{{$category->name}}</span></h1>

<div class="row g-5">
    @include('components.count', ['count' => $count])

    @include('components.products', ['products' => $products])
    @include('components.pagination', ['products' => $products])

</div>
@endsection