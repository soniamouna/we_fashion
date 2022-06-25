@extends('layouts.master')

@section('content')

<h1>Produits soldé</h1>

    <div class="row g-5">

        @include('components.products', ['products' => $products])
    </div>
@endsection