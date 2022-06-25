<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
  @include('common.navbarClient')
  <div class="container">
        <div class="row col-lg-12 g-0">
          <div class="col-lg-4">
            <img src={{asset($picture->path)}} class="w-100 rounded-start" alt="...">
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
  </div>
</body>
</html>