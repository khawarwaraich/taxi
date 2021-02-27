//Code for auto fetch Address from Google map API

var autocomplete = new google.maps.places.Autocomplete(document.getElementById('location'));
google.maps.event.addListener(autocomplete, 'place_changed', function () {
    autocomplete.getPlace();
})


var autocomplete2 = new google.maps.places.Autocomplete(document.getElementById('location2'));
google.maps.event.addListener(autocomplete2, 'place_changed', function () {
    autocomplete2.getPlace();
})
