@foreach ($products as $key => $product)
<div class="col-lg-4">
  <a href="{{url('produit', $product->id)}}">
    <div class="card h-100">
   
      <img src={{asset($product->picture->path)}} class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->price}} €</p>
      </div>
    </div>
  </a>
  </div>
@endforeach
