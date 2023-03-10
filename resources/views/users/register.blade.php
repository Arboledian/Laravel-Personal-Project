<link rel="stylesheet" href="/css/sesion.css" />
<x-layout>
    <title>Laravel - register </title>
    @include('/partials._loadingscreen')

    <div class="login ">
        {{-- Header Texto --}}
        <header class="text-center border border-gray-200 rounded mt-10 bg-orange-700 px-2">
            <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
            <p class="mb-4">Create an account to have an account!</p>
        </header>

        {{-- form method post es utilizado para enviar datos, en este caso, los datos se envian a la tabla users
        @csrf es una directiva de seguridad utilizada para evitar ataques csrf, que en resumen, son
        ataques que utilizan links externos para robar informacion en una sesión válida --}}
        <form method="POST" action="/users">
            @csrf


            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2"> Name </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    value="{{ old('name') }}" />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ old('email') }}" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                    value="{{ old('password') }}" />

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password2" class="inline-block text-lg mb-2">
                    Confirm Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
                    value="{{ old('password_confirmation') }}" />

                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-red-800">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="/login" class="text-laravel text-white rounded py-1 px-3">Login</a>
                </p>
            </div>
        </form>
    </div>
    {{--
        --}}
</x-layout>
