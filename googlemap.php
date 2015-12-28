 <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
      <script type="text/javascript">
function initMap() {
  var myLatLng = {lat: 59.396429, lng: 24.760360};

  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    scrollwheel: false,
    zoom: 13,

  });

  // Create a marker and set its position.
  var marker = new google.maps.Marker({
    map: map,
    position: myLatLng,
    title: 'Hello World!'
  });
}
  </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeLkyYUkfdFq6cVUGrca6t-9sBGu56YLw&callback=initMap">
    </script>