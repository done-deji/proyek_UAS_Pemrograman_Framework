<x-guest-layout>

    <div class="text-center mb-6">

        <div class="mx-auto flex items-center justify-center w-16 h-16 rounded-full bg-red-600 text-white text-3xl shadow-lg">
            <i class="fas fa-wrench"></i>
        </div>

        <h1 class="mt-4 text-3xl font-bold text-red-600">
            SMART GARAGE
        </h1>

        <p class="text-gray-500 mt-1">
            Garage Management System
        </p>

    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <x-input-label for="email" value="Email" />

            <x-text-input
                id="email"
                class="block mt-1 w-full rounded-lg"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus />
        </div>

        <div class="mb-4">
            <x-input-label for="password" value="Password" />

            <x-text-input
                id="password"
                class="block mt-1 w-full rounded-lg"
                type="password"
                name="password"
                required />
        </div>

        <div class="flex items-center justify-between mb-6">

            <label class="inline-flex items-center">
                <input type="checkbox" name="remember" class="rounded border-gray-300">
                <span class="ml-2 text-sm text-gray-600">
                    Remember Me
                </span>
            </label>

            @if(Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                   class="text-sm text-red-600 hover:underline">
                    Forgot Password?
                </a>
            @endif

        </div>

        <button
            type="submit"
            class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-lg transition">

            LOGIN

        </button>

    </form>

    <div class="text-center mt-6 text-sm text-gray-400">

        © {{ date('Y') }} Smart Garage

    </div>

</x-guest-layout>