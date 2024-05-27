@extends('layouts.app')

@section('content')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB1D8F_Qd-VaeMy_8bOWFtXE7AdDV7hXI&callback=initMap" async defer></script>
<style>
  #map {
    height: 400px;
    width: 100%;
  }
  h1{
    color:   color: #7777af;
  }
</style>

<h1>Maps</h1>
<div id="map"></div>
<script>
  // Function to initialize the map
  function initMap() {

    var center = { lat: 33.5731, lng: -7.6184 }; // Settat, Morocco (example)

    // Create the map
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: center
    });


    @foreach($etudiants as $etudiant)
      // Create markers for each student using their latitude and longitude
      new google.maps.Marker({
        position: { lat: {{ $etudiant->latitude }}, lng: {{ $etudiant->langitude }} },
        map: map,
        title: ' {{ $etudiant->nom }} ' 
      });
    @endforeach
  }
</script> 
{{-- <h1>long et attit</h1>
    
            @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->latitude }}</td>
                    <td>{{ $etudiant->langitude }}</td>
                
                </tr>
            @endforeach --}}
     
@endsection
