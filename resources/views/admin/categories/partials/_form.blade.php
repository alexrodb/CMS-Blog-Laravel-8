                @csrf

                <div class="col-12 mb-3">
                <label>Nombre de la categoría</label>
                <input type="text" name="name" class="form-control" id = "name"  value="{{ old('name', $category->name)}}" onload="stringToSlug(this.value)" onkeyup="stringToSlug(this.value)">
                </div>

                <div class="col-12 mb-3">
                <label>URL amigable de esta categoría</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="bi bi-link-45deg"></i></span>
                        <input type="text" name="slug" class="form-control" id = "slug-text"  value="{{ old('slug', $category->slug)}}" readonly>
                    </div>
                </div>
                
                <div class="col-12 mb-3">
                <label>Descripción de esta categoría</label>
                <div class="input-group">
                    <span class="input-group-text">Descripción</span>
                    <textarea class="form-control" name="body" aria-label="With textarea">{{ old('body', $category->body)}}</textarea>
                </div>
                </div>
                <div class="col-12 m-6">
                    <div class="d-flex flex-row justify-content-end">
                    <button type="submit" class="btn btn-success"><span class="bi bi-save"></span> {{$btnText}}</button>
                    </div>
                </div>

            @section('scripts')
            <!-- stringToSlug -->
            <script src="{{ asset('vendor/stringToSlug/stringToSlug.js') }}"></script>
            @endsection 