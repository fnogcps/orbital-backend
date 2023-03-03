@extends('layouts.main')
@section('title', 'Dashboard - Orbital')
@section('content')
<div class="container-lg my-4 text-center shadow-2xl backdrop-blur-sm bg-white/80">

    <div class="overflow-x-auto w-full">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                    </th>
                    <th class="text-xl">Name</th>
                    <th class="text-xl">Category</th>
                    <th class="text-xl">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                        <label><input type="checkbox" class="checkbox" /></label>
                    </th>
                    <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <div class="mask mask-squircle w-12 h-12">
                                    <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                                </div>
                            </div>
                            <div>
                                <div class="font-bold">Hart Hagerty</div>
                                <div class="text-sm opacity-50">United States</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge badge-ghost badge-sm">Desktop Support Technician</span></td>
                    <th>
                        <button class="btn btn-xs w-10 h-10 text-center cursor-pointer text-white bg-red-500 hover:bg-red-700 transition duration-100 ease-in-out rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                            </svg>

                        </button>
                        <button class="btn btn-xs w-10 h-10 text-center cursor-pointer text-white bg-blue-500 hover:bg-blue-700 transition duration-100 ease-in-out rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                            </svg>
                        </button>
                    </th>
                </tr>
                <div id="app">
                    ${ callToAPI() }
                </div>
                <tr v-for="user in users">
                    <td>
                        <b>${ user.email }</b>
                    </a>
                </tr>
            </tbody>
        </table>
    </div>
</table>
</div>
<button id="check" class="btn mb-6 gap-1 w-64 px-4 py-3
text-xl text-center font-inter uppercase
text-gray-100 bg-gray-700 hover:bg-gray-800
transition duration-200 ease-in-out
cursor-pointer rounded-full">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
    <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
</svg>
Add product
</button>

<script src="js/axios.min.js"></script>
<script src="https://unpkg.com/vue@next"></script>
<script src="js/operation.js"></script>
@endsection
