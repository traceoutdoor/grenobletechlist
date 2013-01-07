TechList.Map = TechList.Map || {};
      
TechList.Map.init = function(centerCoord, mapId, zoomLevel, mapType) {
  TechList.Map.canvas = new google.maps.Map(document.getElementById(mapId),
  {
    center: new google.maps.LatLng(centerCoord.lat, centerCoord.lng),
    zoom: zoomLevel,
    mapTypeId: mapType,
    disableDefaultUI: true
  });
};
      
TechList.Map.addMarker = function(markerCoord) {
  var marker = new google.maps.LatLng(markerCoord.lat, markerCoord.lng);
  new google.maps.Marker({
    position: marker,
    map: TechList.Map.canvas
  });
};
