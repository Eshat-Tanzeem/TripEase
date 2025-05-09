@extends('layouts.app')

@section('title', 'Register - TripEase')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md mt-10">
        <h2 class="text-2xl font-bold mb-5 text-center">Create an Account</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input id="name" type="text" class="border p-2 w-full rounded" name="name" required autofocus>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input id="email" type="email" class="border p-2 w-full rounded" name="email" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" class="border p-2 w-full rounded" name="password" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input id="password_confirmation" type="password" class="border p-2 w-full rounded" name="password_confirmation" required>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg">Register</button>
            </div>
        </form>
    </div>
@endsection
