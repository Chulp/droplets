//:location of the map (page to be modified)
//:Use [[Gsm_map?location=51.473219,5.429655&place=contracthulp]] 
if (!isset($location)) $location = "51.473219,5.429655";
if (!isset($place)) $place = "ContractHulp B.V.";
$returnvalue = '';
$returnvalue .= '<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>';
$returnvalue .= '<script type="text/javascript">var myCenter=new google.maps.LatLng('.$location.');';
$returnvalue .= 'function initialize(){var mapProp = {	center:myCenter, zoom:15, mapTypeId:google.maps.MapTypeId.ROADMAP};';
$returnvalue .= 'var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);';
$returnvalue .= 'var marker=new google.maps.Marker({position:myCenter });marker.setMap(map);';
$returnvalue .= 'var infowindow = new google.maps.InfoWindow({content:"'.$place.'"});';
$returnvalue .= 'infowindow.open(map,marker);';
$returnvalue .= '} google.maps.event.addDomListener(window, "load", initialize);</script>';
$returnvalue .= '<div id="googleMap" style="width: 750px; height: 650px;"></div>'; 
return $returnvalue;