function initialize() {
    var mapCanvas = document.getElementById('cleveland');
    var mapOptions = {
        center: new google.maps.LatLng(41.41095, -81.83362),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(41.41095, -81.83362),
        map: map,
        title: 'Eminent Jets Cleveland'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);