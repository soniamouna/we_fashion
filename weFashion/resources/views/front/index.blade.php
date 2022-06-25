@extends('layouts.master')

@section('content')
    <h1>Tous les produits</h1>

    <div>
        @include('components.cards', ['products'=>$products])
    </div>
@endsection