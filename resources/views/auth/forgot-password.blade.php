@extends('layouts.forgot-password')


@section('content-auth-forgotPass')
    <div class="mt-5">
        <!-- Form -->
        <form>
            <div class="relative space-y-8">
                <x-input-floating type="email" id="emailAddress" label="Enter your email"/>

                <x-button type="submit" id="forgotPassBtn" buttonLabel="Send Verification Code" />
            </div>
           
        </form>
        <!-- End Form -->
    </div>
@endsection
