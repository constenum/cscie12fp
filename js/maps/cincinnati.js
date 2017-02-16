function initialize() {
    var mapCanvas = document.getElementById('cincinnati');
    var mapOptions = {
        center: new google.maps.LatLng(39.05579, -84.65660),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(39.05579, -84.65660),
        map: map,
        title: 'Eminent Jets Cincinnati'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);