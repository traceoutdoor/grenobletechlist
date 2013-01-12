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
  TechList.addOrganizations('Espaces de coworking', 'coworking-spaces', 'coworking-spaces', '378BDE');
};

TechList.addOtherOrganizations = function() {
  TechList.addOrganizations('Autres organisations', 'other-organizations', 'other-organizations', 'DB8000');
};

shorten_URL = function(url){
  if (url.length > 35){
    url = url.substring(0, 32) + '...';
  }
  return url;
}

TechList.addOrganizations = function(organizationType, organizationSlug, organizationTypeId, pinColor) {
  $.get('/api/'+TechList.City.slug+'/'+organizationSlug, function(organizations) {
    $('#'+organizationTypeId).html(_.template($('#details-template').html(), { 
      id: organizationTypeId, 
      h2: (organizations.length || 0) + ' ' + organizationType
    }));
    
    for(var i=0; i<organizations.length; i++) {
      var organization = organizations[i];
      var organizationMarker = TechList.Map.addMarker(organization, pinColor);
      
      TechList.Map.addInfoWindow(organizationMarker, organization, organizationType);
      
      $('#'+organizationTypeId + ' ul').append(_.template($('#card-template').html(), {
        organizationName: organization.name,
        organizationAddress: organization.address,
        organizationLogo: organization.logo,
        organizationWebsite: organization.website,
        organizationWebsiteShort: shorten_URL(organization.website),
        organizationTwitter: organization.twitter
      }));
    }
    
    TechList.loadTwitterWidget();
    
    TechList.masonry();
  });
};

TechList.loadTwitterWidget = function() {
  twttr.widgets.load();
};

TechList.masonry = function() {
  var container = $('.thumbnails').not('.no-masonry');
  container.imagesLoaded(function(){
    container.masonry({
      itemSelector : '.span3'
    });
  });
};