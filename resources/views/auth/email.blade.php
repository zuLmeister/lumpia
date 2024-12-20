@extends('app')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
    <h1 class="text-2xl font-bold mb-4">Reset Password</h1>

    @if (session('status'))
        <div class="bg-green-100 text-green-600 p-4 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full p-2 border rounded mt-1" required>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Send Password Reset Link</button>
    </form>
</div>
@endsection
