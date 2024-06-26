@extends('Layout.layout')

@section('content')

@endsection
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
                <h2 class="text-3xl font-bold text-center mb-6">Register</h2>
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="full-name">Full Name</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="full-name" type="text" placeholder="Bambang Tabung gas">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="example123@gmail.com">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="employee-id">Employee ID (NIP)</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="employee-id" type="text" placeholder="2120009582880">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="example123@gmail.com">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="********">
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Register
                        </button>
                    </div>
                </form>
                <p class="text-center text-gray-600 text-sm">
                    Already have an account? <a href="login-page" class="text-blue-500 hover:text-blue-700">Login into your account</a>
                </p>
            </div>
        </div>
    </div>
</body>