<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.min.js"></script>
	<title>restaurant</title>
  <script type="text/javascript"async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6rR7BpQkGUEdjS-jsjw7HrbtnF6Fcvec"></script>
</head>
<body>
<iframe src="https://www.google.com/maps/d/u/0/embed ?mid=1b4EPC3MMWI0LSqbty5giIGSLhu-muAE&ehbc=2E312F" width="640" height="480"></iframe>

</body>
<script  type="text/javascript" >
  var lat=48.852969;
  var lon=2.349903;
  var map=null;
  function initMap()
{
      map=new google.maps.Map(doument.getElementById("map")),
      {
        center=new google.maps.latLon(lat,lon);
        zoom:14;
        mapTypeId:google.maps.MapTypeId.ROADMAP;
        mapTypeControl:true;
        scrollwheel:false;

      }
}

</script>
</html>












