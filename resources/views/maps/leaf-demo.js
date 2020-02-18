// See post: http://asmaloney.com/2014/01/code/creating-an-interactive-map-with-leaflet-and-openstreetmap/

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