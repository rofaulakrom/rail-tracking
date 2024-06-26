@extends('Layout.layout')

@section('content')

@include('Component.navbar')

<Body>
<div class="banner min-h-screen flex items-center justify-center">
    <div class="form-container">
        <div class="form">
            <h1 class="text-2xl font-sans">
                CEK KA
            </h1>
            <form action="{{ url('/home') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="trainNumber" class="form-label">No KA</label>
                <input type="text" class="form-control" id="trainNumber" name="trainNumber" required>
            </div>
            <button type="submit" class="btn btn-primary">Enter</button>
        </form>
        <a href="{{ url('/login') }}" class="btn btn-primary">Login</a>
        </div>
    </div>
</div>
</Body>
@include('Component.footer')
