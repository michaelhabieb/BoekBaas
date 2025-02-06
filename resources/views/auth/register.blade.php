<x-guest-layout>
    <!-- Register Form -->
    <div class="max-w-sm mx-auto mt-12 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold text-center text-green-700">Maak een account aan</h2>
        <p class="text-gray-600 text-center mb-4 text-sm">Registreer om toegang te krijgen tot onze boeken</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Naam')" class="text-gray-700 text-sm font-semibold" />
                <x-text-input id="name" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm p-2 text-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-500 text-xs" />
            </div>

            <!-- Email Address -->
            <div class="mt-3">
                <x-input-label for="email" :value="__('Email')" class="text-gray-700 text-sm font-semibold" />
                <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm p-2 text-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500 text-xs" />
            </div>

            <!-- Password -->
            <div class="mt-3">
                <x-input-label for="password" :value="__('Wachtwoord')" class="text-gray-700 text-sm font-semibold" />
                <x-text-input id="password" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm p-2 text-sm" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-500 text-xs" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-3">
                <x-input-label for="password_confirmation" :value="__('Bevestig Wachtwoord')" class="text-gray-700 text-sm font-semibold" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm p-2 text-sm" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-red-500 text-xs" />
            </div>

            <!-- Register Button & Login Link -->
            <div class="flex items-center justify-between mt-5">
                <a class="text-xs text-green-600 hover:text-green-800" href="{{ route('login') }}">
                    Al een account? Log in
                </a>

                <button type="submit" class="bg-green-600 text-white py-2 px-4 text-sm rounded-lg shadow-md hover:bg-green-700 transition duration-300">
                    Registreren
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
