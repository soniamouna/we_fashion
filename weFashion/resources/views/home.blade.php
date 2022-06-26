@extends('layouts.app')


@section('content')
<h1 class="text-center font-monospace">PRODUITS</h1>
<div class="row m-auto col-lg-11">
    <div class="col-lg-10">
    </div>
    {{-- <div class="col-lg-2 m-auto text-center">
        <a href='produits/create' type="button" class="br btn btn-primary">
          Nouveau
        </a>
    </div> --}}
</div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Prix</th>
                <th scope="col">Etat</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
                
              </tr>
            </thead>

            <tbody>

              @foreach ($products as $product)
              <tr>
                <td>{{$product->name}}</td>
                @foreach ($categories as $category)
                    @if($product->category_id == $category->id)
                    <td>{{$category->name}}</td>
                    @endif
                @endforeach
                <td>{{$product->price}} €</td>
                <td>{{$product->state}}</td>



                <td>
                  <a href="#">
                    <i class="fa-solid fa-2x fa-gear"></i>
                  </a>
                </td>
                <td>
                    
                   <a href="#">
                        <i class="fa-solid fa-2x fa-xmark"></i>                    
                   </a>


                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
@endsection

