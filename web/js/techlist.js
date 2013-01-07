TechList.Map = TechList.Map || {};
      
TechList.init = function(cityCoord) {
  TechList.Map.init(cityCoord, 'map', 12, google.maps.MapTypeId.ROADMAP);
  TechList.addStartups();
  TechList.addInvestors();
  TechList.addIncubators();
  TechList.addCoworkingSpaces();
  TechList.addOtherOrganizations();
};

TechList.addStartups = function() {
  TechList.addOrganizations('Startups', 'startups', 'startups', 'F23F3F');
};

TechList.addInvestors = function() {
  TechList.addOrganizations('Investisseurs', 'investors', 'investors', '4EA83E');
};

TechList.addIncubators = function() {
  TechList.addOrganizations('Incubateurs', 'incubators', 'incubators', 'DBD400');
};

TechList.addCoworkingSpaces = function() {
  TechList.addOrganizations('Espace de coworking', 'coworking-spaces', 'coworking-spaces', '378BDE');
};

TechList.addOtherOrganizations = function() {
  TechList.addOrganizations('Autres organisations', 'other-organizations', 'other-organizations', 'DB8000');
};

TechList.addOrganizations = function(organizationName, organizationSlug, organizationTypeId, pinColor) {
  $.get('/api/'+TechList.City.slug+'/'+organizationSlug, function(organizations) {
    for(var i=0; i<organizations.length; i++) {
      TechList.Map.addMarker(organizations[0], pinColor);
    }
    $('#'+organizationTypeId).html(_.template($('#details-template').html(), { 
      id: organizationTypeId, 
      h2: (organizations.length || 0) + ' ' + organizationName
    }));
  });
};

