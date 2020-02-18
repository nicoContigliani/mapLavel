<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
  <title>Leaflet Example - asmaloney.com</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin="" />

  <script src="https://unpkg.com/jquery@3.4.1/dist/jquery.min.js"
    integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin=""></script>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
    integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
    crossorigin=""></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

</head>

<body>


  <div class="jumbotron">
    <h1>Bootstrap Tutorial</h1>
    <p>Bootstrap is the most popular HTML, CSS...</p>
  </div>
  <div  class="card"   id="map" style="width: 800px; height: 440px; border: 1px solid #AAA;"></div>

  <div>


    <button onclick="getLocation()">Try It</button>

    <p id="demo"></p>


  </div>
  <script type='text/javascript' src='maps/markers.js'></script>
  <script type='text/javascript' src='maps/leaf-demo.js'></script>
<script>

//
//var mysql = require('mysql');
//var conexion= mysql.createConnection({
//    host : 'localhost',
//    database : 'dbcircle',
//    user : 'root',
//    password : 'root',
//});
//conexion.connect(function(err) {
//    if (err) {
//        console.error('Error de conexion: ' + err.stack);
//        return;
//    }
//    console.log('Conectado con el identificador ' + conexion.threadId);
//});
//
//conexion.query('SELECT * FROM negocios', function (error, results, fields) {
//    if (error)
//        throw error;
//
//    results.forEach(result => {
//        console.log(result);
//    });
//});
//
//

var map = L.map('map', {
  center: [-32.871690199999996, -68.8466427],
  minZoom: 2,
  zoom: 20
})

L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
  subdomains: ['a', 'b', 'c']
}).addTo(map)

var myURL = jQuery('script[src$="leaf-demo.js"]').attr('src').replace('leaf-demo.js', '')

var myIcon = L.icon({
  iconUrl: myURL + 'images/pin24.png',
  iconRetinaUrl: myURL + 'images/pin48.png',
  iconSize: [29, 24],
  iconAnchor: [9, 21],
  popupAnchor: [0, -14]
})

//for ( var i=0; i < markers.length; ++i )
//{
// L.marker( [markers[i].lat, markers[i].lng], {icon: myIcon} )
//  .bindPopup( '<a href="' + markers[i].url + '" target="_blank">' + markers[i].name + '</a>' )
//  .addTo( map );
//}
////////////////////////////////////////////////////


let lat = -32.871690199999996;
let lng = -68.8466427;



var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {

  if (position.coords.latitude === lat) {
    x.innerHTML = "Latitude: " + position.coords.latitude +
      "<br>Longitude: " + position.coords.longitude;
  } else {
    alert('no anda');
  }
///////////////////////////////////////////////






//this is to show 
var marker = L.marker([lat, lng, { icon: myIcon }])
.bindPopup( "mi casa " )
.addTo(map);

var circle = L.circle([lat, lng], {
  color: 'red',
  fillColor: '#f03',
  fillOpacity: 0.5,
  radius: 500
}).addTo(map);



}
</script>

</body>

</html>