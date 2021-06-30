@if(session('info'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('info')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif



@if(count($errors))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">

        <ul>

            @foreach($errors->all() as $error)

            <li><strong>{{ $error }}</strong></li>

            @endforeach

        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>

@endif