@if(session('info'))

    @section('scripts')
    <script>
        window.onload = function() {
            var myAlert =document.getElementById('toastNotice');
            var bsAlert = new bootstrap.Toast(myAlert);
            bsAlert.show();
        };
    </script>
    @endsection

    <!-- Toast -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div  id="toastNotice" class="toast text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <div class="d-flex flex-row align-items-center justify-content-center">
                        <div class="p-1"><i class="bi bi-check-lg"></i></div>
                        <div class="p-1"><p class ="m-1">{{ session('info')}}</p></div>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif



@if(count($errors))

    @section('scripts')
    <script>
        window.onload = function() {
            var myAlert =document.getElementById('toastNotice');
            var bsAlert = new bootstrap.Toast(myAlert);
            bsAlert.show();
        };
    </script>
    @endsection

    <!-- Toast -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div  id="toastNotice" class="toast-lg text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <div class="d-flex flex-row align-items-center justify-content-center">
                        <div class="p-1"><i class="bi bi-x-circle"></i></div>
                        <div class="p-1">
                        
                        @foreach($errors->all() as $error)

                        <li class ="m-1"><strong>{{ $error }}</strong></li>

                        @endforeach
                        
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

@endif