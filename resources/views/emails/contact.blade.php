@extends('layouts.app')
@section('title', 'Email Contact')

@section('content')
<h2 class="text-4xl font-bold mb-6 text-blue-800">Contact via Email</h2>

@if(session('success'))
<div class="bg-green-200 text-green-800 p-4 rounded-lg mb-6">
    {{ session('success') }}
</div>
@endif

<form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
    @csrf
    <div>
        <label for="name" class="block font-semibold mb-1">Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name"
            class="border border-gray-300 p-3 w-full rounded" required>
    </div>

    <div>
        <label for="email" class="block font-semibold mb-1">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email"
            class="border border-gray-300 p-3 w-full rounded" required>
    </div>

    <div>
        <label for="message" class="block font-semibold mb-1">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Your Message"
            class="border border-gray-300 p-3 w-full rounded" required></textarea>
    </div>

    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg">
        Send Message
    </button>
</form>
@endsection