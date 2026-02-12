@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <main class="min-h-screen bg-[#080808] flex flex-row-reverse">
    <div class="min-h-screen w-1/2 flex flex-col justify-center items-center bg-[#F3F3F3]">
    <!-- <img /> -->

    <h1 class="text-4xl font-bold mb-10">Welcome Back</h1>

        <form
            method="POST"
            action="{{ route('register.execute') }}"
            class="flex flex-col gap-6"
        >
            @csrf

            <label class="flex flex-col">Email:
                <input type="email" name="email" autocomplete="on" class="border-2 px-2 py-1">
            </label>
            <label class="flex flex-col">Password:
                <input type="password" name="password" class="border-2 px-2 py-1">
            </label>
            <button type="submit" class="bg-[#080808] text-[#F3F3F3] p-2 cursor-pointer">Login</button>
        </form>
    </div>
</main>

@endSection
