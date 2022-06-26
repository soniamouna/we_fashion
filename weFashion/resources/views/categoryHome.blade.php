@extends('layouts.app')
@section('content')
<h1 class="text-center font-monospace">CATÉGORIES</h1>
<div class="row m-auto col-lg-11">
    <div class="col-lg-10">

    </div>
    <div class="col-lg-2 m-auto text-center">
        <a href="categories/create" type="button" class="br btn btn-primary">
          Nouveau
        </a>
    </div>
</div>


<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Catégories</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>

    <tbody>

      @foreach ($categories as $category)
      <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
        
        <td>
          <a href="{{url('categories/'.$category->id.'/edit')}}">
            <i class="fa-solid fa-2x fa-gear"></i>
          </a>
        </td>
        <td>
          <form
            action="{{ route('categories.destroy', $category) }}"
            method="POST"
            onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')">
            @csrf @method('DELETE')
            <button
                type="submit"
                class="btn btn-light text-danger">
                <i class="fa-solid fa-2x fa-xmark"></i>                    
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
