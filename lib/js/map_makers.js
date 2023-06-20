import YourMap from "./map";

const path = "";
const jsonPath = `${path}/map_markers.json`;
const mapDiv = document.getElementById("map");
const mapCanvas = new google.maps.Map(mapDiv, {
  zoom: 16,
  center: { lat: 21.297643, lng: -157.839234 }
});

const map = new YourMap(jsonPath, mapCanvas);
google.maps.event.addDomListener(window, "load", map.initMap());