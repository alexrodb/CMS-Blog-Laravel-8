            @csrf
                <!--user_id Se envia desde PostController dentro de store como $user_id = auth()->user()->id;-->
                <div class="container">
                    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                    <div class="row">
                        <div class="col-md-6">
                            @php
                                $statusPost = $post->status;
                            @endphp
                                
                            <div class="col">
                                <!--status-->
                                <div class="d-flex ">
                                    
                                <label class="mb-3">Estado de la entrada o publicación:</label>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input mt-2" type="radio" name="status" id="inlineRadio1" value="{{'DRAFT'}}"
                                    @if ($statusPost === 'DRAFT')
                                        checked
                                    @endif>
                                    <label class="form-check-label" for="inlineRadio1"><span class="badge rounded-pill bg-warning text-dark p-2 fs-6"><i class="bi bi-exclamation-circle"></i> </i> Borrador</span> </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input mt-2" type="radio" name="status" id="inlineRadio2" value="{{'PUBLISHED'}}"
                                    @if ($statusPost === 'PUBLISHED')
                                        checked
                                    @endif>
                                    <label class="form-check-label" for="inlineRadio2"><span class="badge rounded-pill bg-success p-2 fs-6"><i class="bi bi-check-circle"></i> Publicado</span></label>
                                </div>
                                </div>
                            </div>
                            <!--name-->
                            <label class="mb-2">Nombre </label>
                            <input type="text" name="name" class="form-control  mb-2" id = "name"  value="{{ old('name', $post->name)}}" onload="stringToSlug(this.value)" onkeyup="stringToSlug(this.value)" required>
                            <!--slug--> 
                            <label class="mb-2">URL amigable</label>
                            <div class="input-group flex-nowrap  mb-2">
                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-link-45deg"></i></span>
                                <input type="text" name="slug" class="form-control" id = "slug-text"  value="{{ old('slug', $post->slug)}}" readonly required>
                            </div>
                            <!--picture--> 
                            <div class="mb-3">
                                <label for="formFile" class="form-label mt-3">Imagen principal</label>
                                <input class="form-control" type="file" id="formFile" name="picture_up" accept="image/*">
                            </div>
                            @if($post->picture)
                                <div class="d-flex justify-content-center mt-2">
                                    <img class="img-thumbnail img-fluid" width="50%" height="50%" src="{{ asset('storage/img/picturePost/'.$post->picture) }}" alt="{{ $post->picture }}">
                                </div>
                            @else
                                <div class="d-flex justify-content-center mt-2">
                                    <img class="img-thumbnail img-fluid" width="50%" height="50%" src="{{ asset('storage/img/NoPicture.jpg') }}" alt="{{ $post->picture }}">
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <!--category_id--> 
                            <label class="mb-2">Escoge una categoría para esta entrada</label> 
                            <select name="category_id" class="form-select mb-3" required>
                                @foreach($categories as $id => $name)
                                <option value="{{ $id }}"
                                    {{ (isset($post->category->id) && ($id == $post->category->id)) ? 'selected' : ''}}>{{ $name}}
                                </option>
                                @endforeach
                            </select>
                            <!--Tags-->
                            <label class="mb-2">Escoge las etiquetas para esta entrada</label> 
                            <select class="form-select mb-2" size="20" multiple name="tags[]" required>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                        @foreach ($post->tags as $postTag)
                                            @if ($postTag->id == $tag->id)
                                                selected
                                            @endif
                                        @endforeach
                                    >{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <label class="mt-2 mb-2">Resumen</label>
                    <div class="input-group mb-4">
                        <textarea class="form-control" name="abstract" aria-label="With textarea">{{ old('abstract', $post->abstract)}}</textarea>
                    </div>
                    <div class="col-12 mb-1">
                    <label class="mb-2">Descripción</label>
                    <div class="input-group">
                        <textarea class="form-control" id="ckeditor" name="body" aria-label="With textarea">{{ old('body', $post->body)}}</textarea>
                    </div>

                    <!-- ckeditor -->
                    <script src="{{ asset('vendor/ckeditor_4.16.1_full/ckeditor/ckeditor.js') }}"></script>
                    <script src="{{ asset('vendor/ckeditor_4.16.1_full/ckeditor/jsckeditor/initEditor.js') }}"></script>
                    <script>
                        initEditor();
                        window.onload = function () {
                        CKEDITOR.replace('ckeditor', {
                            filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                            });
                        }
                    </script>

                    </div>
                    <div class="col-12 p-2">
                        <div class="d-flex flex-row justify-content-end">
                        <button type="submit" class="btn btn-success"><span class="bi bi-save"></span> {{$btnText}}</button>
                        </div>
                    </div>
