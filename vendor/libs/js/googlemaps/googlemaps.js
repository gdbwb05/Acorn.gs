// this is a helpful link -- http://stiern.com/tutorials/adding-custom-google-maps-to-your-website/
// this was for adding the popup marker -- https://developers.google.com/maps/documentation/javascript/overlays#Markers
// your supposed to have an onload function it the body to load the script but works without -- onload="initialize()

function initialize() {
  
 var myLatlng = new google.maps.LatLng(41.11226,-81.621857);
  var myOptions = {
    zoom: 16,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title:"Hello World!"
  });
}

function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyBPPEebZG5F8gKGC6cwWh4O9WFk2Nmece4&sensor=false&callback=initialize";
  document.body.appendChild(script);
}

window.onload = loadScript;

