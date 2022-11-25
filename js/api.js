<script type="text/javascript">
  var map;
  function getData() {
    $.ajax({
    url: "map_api_wrapper.php",
    async: true,
    dataType: 'json',
    success: function (data) {
      console.log(data);
      //load map
      init_map(data);
    }
  });  
  }
  
  function init_map(data) {
        var map_options = {
            zoom: 14,
            center: new google.maps.LatLng(data['latitude'], data['longitude'])
          }
        map = new google.maps.Map(document.getElementById("map"), map_options);
       marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(data['latitude'], data['longitude'])
        });
        infowindow = new google.maps.InfoWindow({
            content: data['formatted_address']
        });
        google.maps.event.addListener(marker, "click", function () {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
    
<script src="https://maps.googleapis.com/maps/api/js?key=api_key&callback=getData" async defer></script>