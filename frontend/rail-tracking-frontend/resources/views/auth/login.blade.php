@extends('Layout.layout')

@section('content')

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Left section -->
        <div class="flex-1 bg-white flex flex-col justify-center items-center p-8">
            <img src="assets/images/kailogistikwarna.png" alt="KAI Logistik" class="absolute top-0 left-0 w-48 h-24 md:w-32 md:h-32 lg:w-72 lg:h-32">
            <h1 class="text-4xl font-bold mb-2">RCS</h1>
            <h2 class="text-2xl font-semibold mb-4">Rail Cargo System</h2>
            <p class="text-gray-600 mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, itaque accusantium odio, soluta, corrupti aliquam quibusdam tempora at cupiditate quis eum maiores libero veritatis? Dicta facilis sint aliquid ipsum atque?</p>
            <div class="flex space-x-4 absolute bottom-0 left-0">
                <img src="assets/images/rcslogo1.png" alt="RCS Logo 1" class="w-24 h-24 md:w-32 md:h-32 lg:w-48 lg:h-48">
                <img src="assets/images/rcslogo2.png" alt="RCS Logo 2" class="w-24 h-24 md:w-32 md:h-32 lg:w-48 lg:h-48">
                <img src="assets/images/rcslogo3.png" alt="RCS Logo 3" class="w-24 h-24 md:w-32 md:h-32 lg:w-48 lg:h-48">
            </div>
        </div>

        <!-- Right section -->
        <div class="flex-1 bg-gray-50 flex flex-col justify-center items-center p-8">
            <div class="w-full max-w-md">
                <h2 class="text-3xl font-bold text-center mb-6">Login</h2>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                
                <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="example123@gmail.com">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required autocomplete="current-password" placeholder="********">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>
                <p class="text-center text-gray-600 text-sm">
                    Don't have an account? <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700">Create your account</a>
                </p>
            </div>
        </div>
    </div>
</body>

@endsection
