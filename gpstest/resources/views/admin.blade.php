@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 list">
                <a href="{{route('device.create')}}" role="button" class="btn btn-primary mb-4">Add device</a>
                <ul class="list-group">
                    @foreach($devices as $device)
                        <li class="list-group-item ">{{$device->name}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col map">
                <div id="map"></div>
            </div>
        </div>
    </div>
    <script>
         var app = @json($devices);

         var lat = app[0].latitude;
         var lng = app[0].longitude;

         var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: lat, lng: lng}
         });

         var marker = new google.maps.Marker({
            position: {
                lat: lat,
                lng: lng
            },
            map: map
        });

         var geocoder = new google.maps.Geocoder;
         var infowindow = new google.maps.InfoWindow;

         marker.addListener('click', function() {
             var latlng = {lat: lat, lng: lng};
             geocoder.geocode({'location': latlng}, function(results, status) {
                 if (status === 'OK') {
                     if (results[0]) {
                         map.setZoom(11);
                         var marker = new google.maps.Marker({
                             position: latlng,
                             map: map
                         });
                         console.log(results[0]);
                         infowindow.setContent(results[0].formatted_address);
                         infowindow.open(map, marker);
                     } else {
                         window.alert('No results found');
                     }
                 } else {
                     window.alert('Geocoder failed due to: ' + status);
                 }
             });
         });


         // var infowindow = new google.maps.InfoWindow;
         // infowindow.setContent(results[0].formatted_address);
         // var test = https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=-34.44076&lon=-58.70521:
         // $.ajax({
         //     type: "post",
         //     url: "https://nominatim.openstreetmap.org/reverse?",
         //     data: {lat: lat, lon: lng},
         //     dataType: "json",
         //     success:function (data)
         //     {
         //        console.log(data);
         //     }});


    </script>

@endsection