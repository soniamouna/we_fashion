


        <div class="col-lg-6 pt-5 mt-5 m-auto">
              <div class="  mb-3">
                <form action="{{ route('categories.store')}}" method='POST'>
                  @csrf

                  <label for="exampleFormControlInput1" class="form-label">Ajouter un produit</label>
                    <textarea class="form-control" name="name">{{ old('name') }}</textarea>
                  <button type="submit" class="btn btn-primary">Créer</button>
                </form>
              </div>
        </div>

   