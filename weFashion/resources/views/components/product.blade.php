<div class="row col-lg-12 g-0">
    <div class="col-lg-4">
      <img src={{asset($product->picture->path)}} class="w-100 rounded-start" alt="...">
    </div>
    <div class="col-lg-8">
        <h1 class="card-title">{{$product->name}}</h1>
        <p>Réf :  {{$product->reference}}</p>
        <p>{{$product->description}}</p>
        <p>{{$product->category->name}}</p>
        <p>{{$product->price}} €</p>
        <p>{{$product->state}}</p>

        <form class="col-lg-3">
          <div class="mb-3 form-check ps-0">
              <label class="form-check-label" for="exampleCheck1">Taille: </label>

              <select class="form-select" aria-label="Default select example">
                  <option selected disabled>Selectionner une taille</option>
                  
                  @forelse($product->sizes as $size)
                      <option value="{{ $size->id }}">{{ $size->size }}</option>
                  @empty
                  <p>Aucune taille</p>
                  @endforelse
              </select>
          </div>
      </form>
      <button type="submit" class="btn btn-primary">Acheter</button>
      </div>

 
</div>