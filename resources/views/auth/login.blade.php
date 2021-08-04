<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <h1 class="fs-4 card-title fw-bold mb-4">Bienvenido de vuelta</h1>
        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="" autocomplete="off">
            @csrf
            <div class="mb-3">
                <x-label class="mb-2 text-muted" for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
				<div class="invalid-feedback">
				Email is invalid
				</div>
			</div>

            <div class="mb-3">
				<div class="mb-2 w-100">
                    <x-label class="text-muted" for="password" value="{{ __('Password') }}" />
                    @if (Route::has('password.request'))
                    <a class="float-end link-light" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
				</div>
				<x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
				<div class="invalid-feedback">
					Password is required
				</div>
			</div>

            <div class="d-flex align-items-center">
				<div class="form-check">
                    <x-checkbox id="remember_me" name="remember" />
					<label for="remember" class="form-check-label">{{ __('Remember me') }}</label>
				</div>
				<button type="submit" class="btn btn-danger ms-auto">
                    {{ __('Log in') }}
				</button>
			</div>



            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
