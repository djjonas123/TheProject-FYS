
/*
Javascript for the map.
 */

function myMap() {
    var myCenter = new google.maps.LatLng(52.359103, 4.907706400000052);
    var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
}

/*
End javascript for the map.
 */

