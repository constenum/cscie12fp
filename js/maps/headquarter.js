function initialize() {
    var mapCanvas = document.getElementById('headquarter');
    var mapOptions = {
        center: new google.maps.LatLng(41.589408, -83.815759),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(41.589408, -83.815759),
        map: map,
        title: 'Eminent Jets Headquarter'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);