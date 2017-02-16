function initialize() {
    var mapCanvas = document.getElementById('akron');
    var mapOptions = {
        center: new google.maps.LatLng(40.91715, -81.43217),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(40.91715, -81.43217),
        map: map,
        title: 'Eminent Jets Akron/Canton'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);