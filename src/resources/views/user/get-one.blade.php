@extends('layouts.app')

@section('title', 'User Infos')

@section('content')

    <main>
        <h1>User Data</h1>

        @if ($user)
            <p>Name: {{ $user->getName() }}</p>
            <p>Email: {{ $user->getEmail() }}</p>
            <p>UUID: {{ $user->getUuid() }}</p>
        @else
            <p>User not founded.</p>
        @endif
    </main>

@endsection
