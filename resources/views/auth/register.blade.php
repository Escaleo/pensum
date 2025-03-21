<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
        
        <x-validation-errors class="mb-4" />
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-4">
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full " type="text" name="name" :value="old('name')" 
                autofocus autocomplete="name" />
            </div>
            
            <div class="mt-4">
                <x-label for="ci_card" value="{{ __('Cedula') }}" />
                <x-input id="id_ci_card" class="block mt-1 w-full " type="number" name="ci_card" :value="old('cedula')"
                 autofocus autocomplete="cedula" />
            </div>
            
            <div class="mt-4">
                <x-label for="city" value="{{ __('Ciudad') }}" />
                <x-input id="id_ci_city" class="block mt-1 w-full " type="text" name="city" :value="old('city')"
                 autofocus autocomplete="city" />
            </div>
            <div class="mt-4">
                <x-label for="address" value="{{ __('Direccion') }}" />
                <x-input id="id_address" class="block mt-1 w-full " type="text" name="address" :value="old('address')"
                 autofocus autocomplete="address" />
            </div>
            
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Telefono') }}" />
                <x-input id="id_phone" class="block mt-1 w-full " type="number" name="phone" :value="old('phone')"
                 autofocus autocomplete="phone" />
            </div>
            
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                 autocomplete="email" />
            </div>
            
            <div class="mt-4">
                <x-label for="username" value="{{ __('Usuario') }}" />
                <x-input id="id_username" class="block mt-1 w-full " type="text" name="username" :value="old('username')"
                 autofocus autocomplete="username" />
            </div>
            
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="id_password" class="block mt-1 w-full" type="password" name="password" 
                autocomplete="new-password" />
            </div>
            
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="id_password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation"  autocomplete="new-password" />
            </div>
            
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms"  />
                        
                        <div class="ms-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' =>
                            '<a target="_blank" href="' .
                            route('terms.show') .
                            '" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                            __('Terms of Service') .
                            '</a>',
                            'privacy_policy' =>
                            '<a target="_blank" href="' .
                            route('policy.show') .
                            '" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                            __('Privacy Policy') .
                            '</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
            @endif
            
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            
            <x-button class="ms-4">
                {{ __('Register') }}
            </x-button>
        </div>
    </form>
</x-authentication-card>
</x-guest-layout>
