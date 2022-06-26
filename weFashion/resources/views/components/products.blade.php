<div class="row col-lg-12 pb-5">
@foreach ($products as $key => $product)
<div class="col-lg-4 pt-5">
  <a class="text-decoration-none" href="{{url('produit', $product->id)}}">
    <div class="card h-100">
   
      <img src={{asset($product->picture->path)}} class="w-100 h-100 card-img-top" alt="...">

      <div class="card-body">
        <h5 class="text-dark card-title">{{$product->name}}</h5>
        <p class="text-dark card-text">{{$product->price}} €</p>
      </div>
    </div>
  </a>
  </div>
@endforeach
</div>
