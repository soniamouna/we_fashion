
@foreach ($products as $key => $product)
<div class="col">
    <div class="card h-100">
   
      <img src={{$pictures[$key]->path}} class="card-img-top" alt="...">

      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->price}} €</p>
      </div>
    </div>
  </div>
@endforeach
