@extends('layouts.app')
@section('title', 'Contact Me')

@section('content')
<h2 class="text-3xl font-bold mb-4">Contact</h2>

<!-- Add Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@if(session('success'))
<div class="bg-green-200 text-green-800 p-3 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<div class="mt-10 space-y-8 text-4xl">
    <!-- Email with icon and link to mailto: -->
    <p class="flex items-center space-x-6">
        <i class="fas fa-envelope text-blue-600" style="font-size: 2rem;"></i>
        <strong>
            <a href="{{ route('email.contact') }}" class="hover:underline text-blue-800">
                E-mail
            </a>
        </strong>
    </p>
    <br><br>
    <!-- Phone with icon -->
    <p class="flex items-center space-x-6">
        <i class="fas fa-phone-alt text-green-600" style="font-size: 2rem;"></i>
        <strong class="text-gray-800">Phone:</strong>
        <span class="text-black">0918097194</span>
    </p>
    <br><br>
    <!-- Telegram with icon and link to Telegram -->
    <p class="flex items-center space-x-6">
        <i class="fab fa-telegram-plane text-blue-500" style="font-size: 2rem; padding:5px;"></i>
        <strong class="text-gray-800">
            Telegram:
            <a href="https://t.me/getnet1621" target="_blank" class="hover:underline text-blue-700">
                t.me/@getnet1621
            </a>
        </strong>
    </p>
    <br><br>
    <!-- GitHub with icon and link -->
    <p class="flex items-center space-x-6 mt-8">
        <i class="fab fa-github text-gray-800" style="font-size: 2rem;"></i>
        <strong class="text-gray-800">
            GitHub:
            <a href="https://github.com/getnet2017" target="_blank" class="hover:underline text-blue-700">
                github.com/getnet2017
            </a>
        </strong>
    </p>

</div>





@endsection