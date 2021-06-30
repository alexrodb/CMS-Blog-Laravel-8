            @csrf
            <form class="row g-3">
                <div class="col-12 mb-3">
                    <label for="inputAddress" class="form-label">Nombre de la Categoría</label>
                    <input type="text" name="name" class="form-control" id = "name"  value="{{ old('name', $category->name)}}">
                </div>
                <div class="col-12 mb-3">
                    <label for="inputAddress2" class="form-label">URL amigable de cada Categoría</label>
                    <input type="text" name="slug" class="form-control" id = "permalink"  value="{{ old('slug', $category->slug)}}" readonly>
                </div>
                <div class="col-12 mb-3">
                    <label for="inputAddress2" class="form-label">Descripción de esta categoría</label>
                    <input type="textarea"  class="form-control" name="body"  value="{{ old('body', $category->body)}}">
                </div>
            </form>
            <div class="col-12">
                <div class="d-flex flex-row justify-content-end">
                    <button type="submit" class="btn btn-success">
                        <span class="bi bi-save"></span> {{$btnText}}
                    </button>
                </div>
            </div>
            
        

            @section('scripts')
            <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
            <script>
                $(document).ready( function() {
                    $("#name").stringToSlug();
                });
            </script>
            @endsection 