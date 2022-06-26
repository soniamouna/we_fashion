<div class="col-lg-6 pt-5 mt-5 m-auto">
    <div class="  mb-3">
      <form action="{{ route('categories.update', $category) }}" method='POST'>
        @csrf
        @method('PUT')

        <label for="exampleFormControlInput1" class="form-label">Modifier la catégorie</label>
          <textarea class="form-control" name="name">{{ old('name', $category->name) }}</textarea>
        <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
    </div>
</div>