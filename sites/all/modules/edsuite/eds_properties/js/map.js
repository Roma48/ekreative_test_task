//Drupal.behaviors.map = function(context) {
//  var initialZoom = true;
//  mapInit();
//};

function mapInit(mapMarkers,mapSettings,mapId,autozoom) {
    
    if(jQuery('#gmap-wrapper').length > 0) {

        jQuery('#' + mapId).empty();
        
        var mapOptions = {
          center: new google.maps.LatLng(mapSettings.latitude, mapSettings.longitude),
          zoom: parseInt(mapSettings.zoom),
          mapTypeId: getMapTypeId(mapSettings.maptype)
        };

        var propertiesMap = new google.maps.Map(document.getElementById(mapId), mapOptions);


        //set markers
        var infowindow = new google.maps.InfoWindow();

        var latlngbounds = new google.maps.LatLngBounds( );

        jQuery.each(mapMarkers, function(index, value) {

            var latlng = new google.maps.LatLng(value.latitude, value.longitude);

            latlngbounds.extend(latlng);

            //bounds.extend(latlng);
            var marker = new google.maps.Marker({
              position : latlng,
              map : propertiesMap,
              title : value.opt.title
            });
            
            marker.setIcon(value.icon);
            
            if(value.text != false)
                makeInfoWindowEvent(propertiesMap, infowindow, value.text, marker);

            //markers.push(marker);        
        });
        
        if(autozoom)
            propertiesMap.fitBounds( latlngbounds );
    
    }
}


function getMapTypeId(type) {
    if (type == 'Map' || type == 'Roadmap') return google.maps.MapTypeId.ROADMAP;
    if (type == 'Hybrid') return google.maps.MapTypeId.HYBRID;
    if (type == 'Physical' || type == 'Terrain') return google.maps.MapTypeId.TERRAIN;
    if (type == 'Satellite') return google.maps.MapTypeId.SATELLITE;
}

function makeInfoWindowEvent(map, infowindow, contentString, marker) {
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(contentString);
    infowindow.open(map, marker);
  });
}