@extends('layout.app')

@section('content')
<div class="col-lg-6 pt-5 mt-5 m-auto">
    <div class="  mb-3">
      <form action="{{ route('products.store', $product) }}" method='POST'>
        @csrf
        @method('PUT')

        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <textarea class="form-control" name="name">{{ old('name', $product->name) }}</textarea>
        
        <label for="exampleFormControlInput1" class="form-label">Catégorie</label>
          <select name="category">
            @foreach($categories as $category)
              <option value="{{$category->id}}"
                {{$product->category_id == $category->id ? 'selected' : '' }}>
                {{$category->name}}
              </option>
            @endforeach
        
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <textarea class="form-control" name="name">{{ old('name', $product->name) }}</textarea>
       
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <textarea class="form-control" name="name">{{ old('name', $product->name) }}</textarea>
       
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <textarea class="form-control" name="name">{{ old('name', $product->name) }}</textarea>

        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <textarea class="form-control" name="name">{{ old('name', $product->name) }}</textarea>
        
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <textarea class="form-control" name="name">{{ old('name', $product->name) }}</textarea>

        <button type="submit" class="btn btn-primary">Créer</button>
      </form>
    </div>
</div>

@endsection