TechList.Map = TechList.Map || {};
      
TechList.init = function(cityCoord) {
  TechList.Map.init(cityCoord, 'map', 13, google.maps.MapTypeId.ROADMAP);
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

TechList.addOrganizations = function(organizationType, organizationSlug, organizationTypeId, pinColor) {
  $.get('/api/'+TechList.City.slug+'/'+organizationSlug, function(organizations) {
    for(var i=0; i<organizations.length; i++) {
      var organization = organizations[i];
      var organizationMarker = TechList.Map.addMarker(organization, pinColor);
      TechList.Map.addInfoWindow(organizationMarker, organization, organizationType);
    }
    $('#'+organizationTypeId).html(_.template($('#details-template').html(), { 
      id: organizationTypeId, 
      h2: (organizations.length || 0) + ' ' + organizationType
    }));
  });
};

