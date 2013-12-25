
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see a blank space instead of the map, this
// is probably because you have denied permission for location sharing.
function success(position) {
  /*var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcontainer';
  mapcanvas.style.height = '400px';
  mapcanvas.style.width = '600px';
  */
  //document.querySelector('article').appendChild(mapcanvas);

  var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  console.log(coords);
  $(document).ready(function(){
    $('#cur_lat').val(position.coords.latitude);
    $('#cur_lng').val(position.coords.longitude);
  })
  var options = {
    zoom: 15,
    center: coords,
    mapTypeControl: false,
    navigationControlOptions: {
    	style: google.maps.NavigationControlStyle.SMALL
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
 
}
if (navigator.geolocation) {

  navigator.geolocation.getCurrentPosition(success);
} else {
  error('Geo Location is not supported');
}

rad = function(x) {return x*Math.PI/180;}

distHaversine = function(p1_lat,p1_lng,p2_lat,p2_lng) {
  var R = 6371; // earth's mean radius in km
  var dLat  = rad(p2_lat - p1_lat);
  var dLong = rad(p2_lng - p1_lng);

  var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
          Math.cos(rad(p1_lat)) * Math.cos(rad(p2_lat)) * Math.sin(dLong/2) * Math.sin(dLong/2);
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
  var d = R * c;

  return d.toFixed(3);
}