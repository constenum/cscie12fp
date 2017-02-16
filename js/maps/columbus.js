function initialize() {
    var mapCanvas = document.getElementById('columbus');
    var mapOptions = {
        center: new google.maps.LatLng(39.99822, -82.88921),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(39.99822, -82.88921),
        map: map,
        title: 'Eminent Jets Columbus'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);