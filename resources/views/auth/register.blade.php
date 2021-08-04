<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <h1 class="fs-4 card-title fw-bold mb-4">¡Para crear una nueva cueta regístrate!</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4 mb-3">
                <x-label class="mb-2 text-muted" for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4 mb-3">
                <x-label  class="mb-2 text-muted" for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4 mb-3">
                <x-label  class="mb-2 text-muted" for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4 mb-3">
                <x-label  class="mb-2 text-muted" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <p class="form-text text-muted mb-3">
			Al registrarse, acepta nuestros términos y condiciones.
			</p>
            

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
            
            <div class="flex items-center justify-center mt-4">
            <a class="link-light" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
            </a>
                <div class="align-items-center d-flex">
					<button type="submit" class="btn btn-danger ms-auto">
                                    {{ __('Register') }}	
					</button>
				</div>
            </div>
        </form>
    </x-authentication-card>
    
</x-guest-layout>
