            @csrf

            <div class="d-grid gap-3">

                <div class="col-12 mb-1 p-2">
                    <label class="mb-2">Nombre de la etiqueta</label>
                    <input type="text" name="name" class="form-control" id = "name"  value="{{ old('name', $tag->name)}}" onload="stringToSlug(this.value)" onkeyup="stringToSlug(this.value)">
                </div>

                <div class="col-12 mb-1 p-2">
                    <label class="mb-2">URL amigable de esta etiqueta</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="bi bi-link-45deg"></i></span>
                        <input type="text" name="slug" class="form-control" id = "slug-text"  value="{{ old('slug', $tag->slug)}}" readonly>
                    </div>
                </div>
                
                <div class="col-12 p-2">
                    <div class="d-flex flex-row justify-content-end">
                        <button type="submit" class="btn btn-success btn-lg">
                            <div class="d-flex flex-row justify-content-start align-items-center">
                                <div>
                                    <img class="iconSize" src="{{ asset('assetsAdministrator/image/svg/icons/disquete.svg') }}" alt="link">
                                </div>
                                <div>
                                    {{$btnText}}
                                </div>
                            </div>
                        </button>
                    </div>
                </div>

            </div>
