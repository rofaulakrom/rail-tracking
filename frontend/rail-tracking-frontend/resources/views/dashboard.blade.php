@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <form action="{{ url('/dashboard') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_ka" class="form-label">Nama KA</label>
            <input type="text" class="form-control" id="nama_ka" name="nama_ka" required>
        </div>
        <div class="mb-3">
            <label for="no_ka" class="form-label">No KA</label>
            <input type="text" class="form-control" id="no_ka" name="no_ka" required>
        </div>
        <div class="mb-3">
            <label for="stasiun_asal" class="form-label">Stasiun Asal</label>
            <input type="text" class="form-control" id="stasiun_asal" name="stasiun_asal" required>
        </div>
        <div class="mb-3">
            <label for="stasiun_tujuan" class="form-label">Stasiun Tujuan</label>
            <input type="text" class="form-control" id="stasiun_tujuan" name="stasiun_tujuan" required>
        </div>
        <button type="submit" class="btn btn-primary">Enter</button>
    </form>
</div>
@endsection
