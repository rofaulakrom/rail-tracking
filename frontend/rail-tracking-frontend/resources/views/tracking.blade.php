@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tracking KA: {{ $no_ka }}</h1>
    <div id="map" style="height: 500px;"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    var map = L.map('map').setView([0, 0], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Fetch and display the route
    fetch(`/api/train/route/{{ $no_ka }}`)
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                var latlngs = data.map(point => [point.latitude, point.longitude]);
                var polyline = L.polyline(latlngs, { color: 'blue' }).addTo(map);
                map.fitBounds(polyline.getBounds());
            }
        });

    // Example: replace this with your real-time data fetching logic
    var trainLocation = { lat: -6.1751, lng: 106.0 };

    var marker = L.marker([trainLocation.lat, trainLocation.lng]).addTo(map)
        .bindPopup('Kereta Api: {{ $no_ka }}')
        .openPopup();

    // Update map with real-time data (this is a placeholder example)
    setInterval(() => {
        fetch('/api/train/location')
            .then(response => response.json())
            .then(data => {
                map.setView([data.latitude, data.longitude], 13);
                marker.setLatLng([data.latitude, data.longitude])
                    .bindPopup('Kereta Api: {{ $no_ka }}')
                    .openPopup();
            });
    }, 5000); // update every 5 seconds
});
</script>
@endsection
