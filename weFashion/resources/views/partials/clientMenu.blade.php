<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand logo" href={{ route('product.list')}}>WE FASHION</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href={{ route('product.state')}}>SOLDE</a>
              </li>
              
             
             
              @foreach($categories as $categorie)
                  <li class="nav-item">
                      <a class="nav-link text-uppercase" href="{{url('produits/categorie', $categorie->id)}}">{{$categorie->name}}</a>
                  </li>
              @endforeach
        </ul>
      </div>
    </div>
  </nav>