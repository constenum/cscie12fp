function initialize() {
    var mapCanvas = document.getElementById('toledo');
    var mapOptions = {
        center: new google.maps.LatLng(41.59255, -83.80603),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(41.59255, -83.80603),
        map: map,
        title: 'Eminent Jets Toledo'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);