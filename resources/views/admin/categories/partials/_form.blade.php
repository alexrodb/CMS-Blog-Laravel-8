            @csrf

                <div class="col-12 mb-3">
                <label>Nombre de la categoría</label>
                <input type="text" name="name" class="form-control" id = "name"  value="{{ old('name', $category->name)}}">
                </div>

                <div class="col-12 mb-3">
                <label>URL amigable de cada Categoría</label>
                <input type="text" name="slug" class="form-control" id = "slug"  value="{{ old('slug', $category->slug)}}" >
                </div>
                
                <div class="col-12 mb-3">
                <label>Descripción de esta Categoría</label>
                <div class="input-group">
                    <span class="input-group-text">With textarea</span>
                    <textarea class="form-control" name="body" aria-label="With textarea">{{ old('body', $category->body)}}</textarea>
                </div>
                </div>
                <div class="col-12 m-6">
                    <div class="d-flex flex-row justify-content-end">
                    <button type="submit" class="btn btn-success"><span class="bi bi-save"></span> {{$btnText}}</button>
                    </div>
                </div>

            @section('scripts')
            @endsection 