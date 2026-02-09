@extends('layouts.app')

@section('title', 'Register')

@section('content')
<form method="POST" action="{{ route('register.store') }}">
    @csrf

    <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" />

    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />

    <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" />

    <button type="submit">Create Account</button>
</form>
@endsection
