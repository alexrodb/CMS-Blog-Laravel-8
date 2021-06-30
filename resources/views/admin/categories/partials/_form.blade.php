            @csrf

                <div class="col-12 mb-3">
                <label>Nombre de la Colección</label>
                <input type="text" name="name" class="form-control" id = "name"  value="{{ old('name', $category->name)}}">
                </div>

                <div class="col-12 mb-3">
                <label>URL amigable de cada Colección</label>
                <input type="text" name="slug" class="form-control" id = "slug"  value="{{ old('slug', $category->slug)}}" >
                </div>
                
                <div class="col-12 mb-3">
                <label>Descripción de esta Colección</label>
                <input type="textarea"  class="form-control" name="body"  value="{{ old('body', $category->body)}}">
                </div>
                <div class="col-12">
                    <div class="d-flex flex-row justify-content-end">
                    <button type="submit" class="btn btn-block btn-success btn-lg"> {{$btnText}}</button>
                    </div>
                </div>

            @section('scripts')
            @endsection 