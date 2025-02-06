<x-guest-layout>
    <!-- Hero Section -->
    <div class="relative bg-cover bg-center h-64 flex items-center justify-center" style="background-image: url('https://via.placeholder.com/1200x500?text=Welcome+to+BoekBaas');">
        <div>       
             
        </div>
        <div class="bg-green-600  p-6 rounded-lg">
            <h1 class="text-3xl font-bold text-white text-center">Welkom bij BoekBaas</h1>
            <p class="text-gray-200 text-center mt-2">Log in om toegang te krijgen tot jouw boeken.</p>
        </div>
    </div>

    <!-- Login Form -->
    <div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-lg shadow-lg">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-gray-700 font-semibold" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm p-2" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-semibold" />
                <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm p-2" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">Onthoud mij</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-green-600 hover:text-green-800" href="{{ route('password.request') }}">
                        Wachtwoord vergeten?
                    </a>
                @endif
            </div>

            <!-- Login Button -->
            <div class="mt-6">
                <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg shadow-md hover:bg-green-700 transition duration-300">
                    Log in
                </button>
            </div>
            <a class="text-xs text-gray-600 hover:text-green-700 mt-2" href="{{ route('register') }}">
                Nog geen account? <span class="font-semibold">Registreer hier</span>
            </a>
        </form>
    </div>
</x-guest-layout>
