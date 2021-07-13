            @csrf
                <!--user_id Se envia desde PostController dentro de store como $user_id = auth()->user()->id;-->
            
                
                <div class="container">
                    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                    <div class="row">
                        <div class="col-md-6">
                            <!--name-->
                            <label class="mb-2">Nombre </label>
                            <input type="text" name="name" class="form-control  mb-2" id = "name"  value="{{ old('name', $post->name)}}" onload="stringToSlug(this.value)" onkeyup="stringToSlug(this.value)">
                            <!--slug--> 
                            <label class="mb-2">URL amigable</label>
                            <div class="input-group flex-nowrap  mb-2">
                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-link-45deg"></i></span>
                                <input type="text" name="slug" class="form-control" id = "slug-text"  value="{{ old('slug', $post->slug)}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!--category_id--> 
                            <label class="mb-2">Escoge una categoría para esta entrada</label> 
                            <select name="category_id" class="form-select mb-2">
                                @foreach($categories as $id => $name)
                                <option value="{{ $id }}"
                                    {{ (isset($post->category->id) && ($id == $post->category->id)) ? 'selected' : ''}}>{{ $name}}
                                </option>
                                @endforeach
                            </select>
                            <!--Tags-->
                            <label class="mb-2">Escoge las etiquetas para esta entrada</label> 
                            <select class="form-select mb-2" multiple name="tags[]">
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

                <div class="col-12 mb-1 ">
                <label class="mb-2">Descripción</label>
                <div class="input-group">
                    <textarea class="form-control" name="body" aria-label="With textarea">{{ old('body', $post->body)}}</textarea>
                </div>
                </div>
                <div class="col-12 p-2">
                    <div class="d-flex flex-row justify-content-end">
                    <button type="submit" class="btn btn-success"><span class="bi bi-save"></span> {{$btnText}}</button>
                    </div>
                </div>