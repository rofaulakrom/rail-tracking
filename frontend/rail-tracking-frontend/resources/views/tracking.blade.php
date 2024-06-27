@extends('layouts.app')

@section('content')
@include('Component.navbar')
<div class="container">
    <h1>Tracking KA: {{ $trainNumber }}</h1>
    <div id="map" style="height: 500px;"></div>
</div>
@include('Component.footer')

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    var map = L.map('map').setView([0, 0], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    console.log('Fetching route data for train number:', '{{ $trainNumber }}');

    fetch(`/api/train/route/{{ $trainNumber }}`)
        .then(response => response.json())
        .then(data => {
            console.log('Route data:', data);
            if (data.length > 0) {
                var latlngs = data.map(point => [point.Latitude, point.Longitude]);
                var polyline = L.polyline(latlngs, { color: 'blue' }).addTo(map);
                map.fitBounds(polyline.getBounds());

                data.forEach(point => {
                    L.marker([point.Latitude, point.Longitude])
                        .bindPopup(`Station: ${point.StationName}<br>Lat: ${point.Latitude}, Lng: ${point.Longitude}`)
                        .addTo(map);
                });
            } else {
                console.log('No route data available.');
            }
        })
        .catch(error => {
            console.error('Error fetching route data:', error);
        });

    // Placeholder untuk lokasi real-time kereta
    // var trainLocation = { lat: -6.91, lng: 107.60 };

    var marker = L.marker([trainLocation.lat, trainLocation.lng]).addTo(map)
        .bindPopup('Kereta Api: {{ $trainNumber }}')
        .openPopup();

    // Update map dengan data real-time (contoh placeholder)
    setInterval(() => {
        fetch('/api/train/location')
            .then(response => response.json())
            .then(data => {
                console.log('Real-time location data:', data);
                map.setView([data.latitude, data.longitude], 13);
                marker.setLatLng([data.latitude, data.longitude])
                    .bindPopup('Kereta Api: {{ $trainNumber }}')
                    .openPopup();
            })
            .catch(error => {
                console.error('Error fetching real-time location:', error);
            });
    }, 5000); // update setiap 5 detik
});
</script>
@endsection
