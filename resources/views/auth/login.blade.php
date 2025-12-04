<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-3xl font-bold text-gray-900">
            {{ __('Welcome Back!') }}
        </h2>
        <p class="mt-2 text-sm text-gray-600">
            {{ __('Please sign in to continue') }}
        </p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full p-2.5" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="name@company.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full p-2.5"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot Password?') }}
                </a>
            @endif
        </div>

        <div class="mt-6">
            <x-primary-button class="w-full justify-center py-3 text-base">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        @if (Route::has('register'))
            <div class="mt-6 text-center text-sm text-gray-600">
                {{ __("Don't have an account?") }}
                <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 hover:underline">
                    {{ __('Register here') }}
                </a>
            </div>
        @endif
    </form>
</x-guest-layout>