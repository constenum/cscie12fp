function initialize() {
    var mapCanvas = document.getElementById('dayton');
    var mapOptions = {
        center: new google.maps.LatLng(39.89874, -84.22097),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(39.89874, -84.22097),
        map: map,
        title: 'Eminent Jets Dayton'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);