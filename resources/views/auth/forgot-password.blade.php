<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-3">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-3">
                <x-label class="text-muted" for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                <div class="invalid-feedback">
					Email is invalid
				</div>
            </div>
            <div class="d-flex align-items-center mt-4">
				<button type="submit" class="btn btn-danger ms-auto">
                {{ __('Email Password Reset Link') }}
				</button>
			</div>
        </form>
    </x-authentication-card>
</x-guest-layout>
