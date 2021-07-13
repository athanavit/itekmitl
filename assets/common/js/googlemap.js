function initMap() {
    var uluru = {
        lat: 13.7275355,
        lng: 100.772329
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: uluru,
        disableDefaultUI: false,
        draggable: true,
        scrollwheel: false,
        clickable: false
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}
