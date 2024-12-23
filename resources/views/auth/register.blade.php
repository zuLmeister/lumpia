@extends('app')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md mt-10">
    <h1 class="text-3xl font-bold text-center mb-6">Create Account</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-4 rounded mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register.post') }}">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" name="name" id="name" class="w-full p-3 border rounded mt-1" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" name="email" id="email" class="w-full p-3 border rounded mt-1" value="{{ old('email') }}" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="w-full p-3 border rounded mt-1" required>
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-3 border rounded mt-1" required>
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded hover:bg-blue-700">Create Account</button>
        </div>
    </form>

    <div class="mt-4 text-center">
        <p class="text-sm text-gray-600">Sudah Memiliki Akun? <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700">Klik untuk Login</a></p>
    </div>
</div>
@endsection
