@extends('layouts.master')

@section('content')
    <h1>Tous les produits</h1>

    <div>
        @include('components.products', ['products'=>$products])
    </div>
@endsection