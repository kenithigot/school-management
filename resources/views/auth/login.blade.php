@extends('layouts.auth')

@section('login-form')
    <!-- Input Group -->
    <div class="py-2">
        <div class="relative">
            <!-- Floating Input -->
            <x-input-floating id="username" for="username" label="Username" />
            <!-- End Floating Input -->
        </div>
    </div>
    <!-- End Input Group -->

    <!-- Input Group -->
    <div class="pt-2">
        <div class="relative">
            <!-- Floating Input -->
            <x-input-floating type="password" id="password" for="password" label="Password" />
            <!-- End Floating Input -->
        </div>
    </div>
    <!-- End Input Group -->

    <div>
        <div class="flex flex-wrap justify-end items-center">
            <a class="inline-flex items-center text-sm underline text-green-500 decoration-2 focus:outline-hidden focus:underline"
                href="{{ route('forgot-password') }}">Forgot password?</a>
        </div>
    </div>

    <div
        class="py-2 flex items-center text-sm text-green-500 font-semibold uppercase before:flex-1 before:border-t before:border-green-500 before:me-6 after:flex-1 after:border-t after:border-green-500 after:ms-6">
        Or</div>

    <div>
        <p class="text-center text-sm text-gray-800">
            Don't have an account yet?
            <a class="underline text-green-500 decoration-2 focus:outline-hidden focus:underline"
                href="{{ route('dashboard') }}">
                Sign up here
            </a>
        </p>
    </div>
    <div>
        <x-button id="forgotBtn" type="submit" buttonLabel="Sign In Now" />
    </div>
@endsection
