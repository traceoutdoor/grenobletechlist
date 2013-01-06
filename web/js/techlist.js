TechList.Map = TechList.Map || {};
      
TechList.Map.init = function(centerCoord, mapId, zoomLevel, mapType) {
  TechList.Map.canvas = new mxn.Mapstraction(mapId, 'leaflet');
  TechList.Map.canvas.setMapType(mapType);
        
  TechList.Map.canvas.setCenterAndZoom(new mxn.LatLonPoint(centerCoord.lat, centerCoord.lng), zoomLevel);
  TechList.Map.canvas.addControls({
    zoom: 'large' || 'small'
  });
};
      
TechList.Map.addMarker = function(markerCoord) {
  var marker = new mxn.Marker(new mxn.LatLonPoint(markerCoord.lat, markerCoord.lng));
  TechList.Map.canvas.addMarker(marker);
};
