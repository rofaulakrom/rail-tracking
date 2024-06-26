@extends('Layout.layout')

<!DOCTYPE html>
<html>
<head>
    <title>Track Cargo</title>
</head>
<body>
    <h1>Track Cargo</h1>
    <form method="POST" action="{{ route('track') }}">
        @csrf
        <label for="no_ka">No KA:</label>
        <input type="text" id="no_ka" name="no_ka" required>
        <button type="submit">Track</button>
    </form>

    @isset($data)
        <h2>Tracking Data:</h2>
        <p>No KA: {{ $data['noKA'] }}</p>
        <p>Nama KA: {{ $data['namaKA'] }}</p>
    @endisset

    @isset($error)
        <h2>{{ $error }}</h2>
    @endisset
</body>
</html>
