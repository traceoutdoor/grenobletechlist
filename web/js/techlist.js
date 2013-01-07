TechList.Map = TechList.Map || {};
      
TechList.init = function(cityCoord) {
  TechList.Map.init(cityCoord, 'map', 12, google.maps.MapTypeId.ROADMAP);
  TechList.addInvestors();
};

TechList.addInvestors = function() {
  $.get('/api/'+TechList.City.slug+'/investors', function(investors) {
    for(var i=0; i<investors.length; i++) {
      TechList.Map.addMarker(investors[0]);
    }
    
    $('#investors').html(_.template($('#details-template').html(), { 
      id: 'investors', 
      h2: investors.length + ' Investors'
    }));
  });
};
