$(document).ready(function() {
	
var map;
var MY_MAPTYPE_ID = 'custom_style';

function initialize() {

  var bemak = new google.maps.LatLng(39.636596, 2.630859);

  var featureOpts = [
    {
      elementType: 'all',
      stylers: [
        { weight: 0.1 },
        { saturation: -100 },
        { gamma: 0.54 }
      ]
    }
  ];

  var mapOptions = {
    zoom: 17,
    disableDefaultUI: true,
    center: bemak,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    },
    mapTypeId: MY_MAPTYPE_ID
  };

  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var styledMapOptions = { name: 'Custom Style' };

  var image = 'assets/mappin.png';
  var beachMarker = new google.maps.Marker({
      icon: image,
      position: bemak,
      map: map,
      title: 'Hello!',
      animation: google.maps.Animation.DROP
  });

  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
    map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

}

google.maps.event.addDomListener(window, 'load', initialize);

});


