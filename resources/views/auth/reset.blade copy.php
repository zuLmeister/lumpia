@extends('app')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
    <h1 class="text-2xl font-bold mb-4">Reset Your Password</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full p-2 border rounded mt-1" value="{{ old('email') }}" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
            <input type="password" name="password" id="password" class="w-full p-2 border rounded mt-1" required>
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border rounded mt-1" required>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Reset Password</button>
    </form>
</div>
@endsection
