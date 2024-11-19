<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-500 to-indigo-600 p-6">
        <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <div class="px-6 py-8">
                <!-- Logo -->
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-32 w-32">
                </div>

                <!-- Title: Login -->
                <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white mb-6">Selamat Datang</h2>
                
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-gray-700 dark:text-gray-300"/>
                        <x-text-input id="email" class="block mt-1 w-full border-gray-300 dark:border-gray-600 rounded-md dark:bg-gray-700 dark:text-gray-300" 
                            type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="text-gray-700 dark:text-gray-300"/>
                        <x-text-input id="password" class="block mt-1 w-full border-gray-300 dark:border-gray-600 rounded-md dark:bg-gray-700 dark:text-gray-300" 
                            type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between mt-4">
                        <label for="remember_me" class="inline-flex items-center text-gray-600 dark:text-gray-400">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-700 dark:border-gray-600 text-indigo-600 focus:ring-indigo-500" name="remember">
                            <span class="ml-2">{{ __('Remember me') }}</span>
                        </label>
                        
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <x-primary-button class="w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>

