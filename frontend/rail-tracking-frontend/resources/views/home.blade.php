@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tracking</h1>
    <form action="{{ url('/home') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="no_ka" class="form-label">No KA</label>
            <input type="text" class="form-control" id="no_ka" name="no_ka" required>
        </div>
        <button type="submit" class="btn btn-primary">Enter</button>
    </form>
</div>
@endsection
