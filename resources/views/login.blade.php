@extends('layouts.main')
@section('title', 'Login - Orbital')
@section('content')
<div class="container max-w-sm my-24 shadow-2xl backdrop-blur-sm text-center bg-white/60 rounded-lg">
    <form id="form-login" method="post" class="flex flex-col items-center p-8 w-full">
        @csrf
        <label class="py-2">
            <span class="block antialiased my-3 text-2xl font-bold font-gilroy text-gray-700">Email address</span>
            <input type="email"  name="email" id="email" class="mt-1 block w-72 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com">
        </label>
        <label class="py-2">
            <span class="block antialiased my-3 text-2xl font-bold font-gilroy text-gray-700">Password</span>
            <input type="password" name="password" id="password" class="mt-1 block w-72 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="••••••••••••••">
        </label>
        <button class="btn mt-6 gap-2 w-64 rounded-md px-4 py-3
        text-sm text-center text-gray-100
        font-gilroy font-semibold
        uppercase transition
        duration-200 ease-in-out
        cursor-pointer hover:bg-gray-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
        </svg>
        Login
    </button>
</form>
</div>
<script src="js/axios.min.js"></script>
<script src="js/loginForm.js"></script>
@endsection
