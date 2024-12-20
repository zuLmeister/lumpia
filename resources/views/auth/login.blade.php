@extends('app')

@section('content')

<div class="w-fit bg-red-50 p-6 rounded shadow-md">
    <a href="/lumpia" class="block mb-4 text-left text-blue-500 hover:underline">Kembali</a>
    <h1 class="text-3xl font-bold mb-6 text-red-700 text-center">Login</h1>
    
    @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-4 rounded mb-4">
            <ul">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    
    
    <form method="POST" action="{{ route('login.post') }}">
        @csrf
        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full p-3 border rounded mt-1" required>
        </div>
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="w-full p-3 border rounded mt-1" required>
        </div>
        <button type="submit" class="w-full bg-red-500 text-white py-2 rounded">Login</button>
    </form>
</div>
@endsection
