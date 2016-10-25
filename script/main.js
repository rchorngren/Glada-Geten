$('.has-dropdown > a').on('click', function(e){
    e.preventDefault();

    var el = $(this);
    var targetSelector = el.attr('href');
    var target = $(targetSelector);
    target.toggleClass('hidden');
});

// Responsive menu toggle - open nav-open
var toggleNav = $('#toggle-nav');
var nav = $('#nav');
var documentEl = $(document.documentElement);
toggleNav.on('click', function(e) {
    e.preventDefault();
    documentEl.toggleClass('nav-open');
});

// Responsive menu toggle - click outside to close nav-open
documentEl.on('click', function(e) {
    var target = $(e.target);
    if (!target.closest(nav).length && !target.closest(toggleNav).length) {
        documentEl.removeClass('nav-open');
        $('.dropdown').addClass('hidden');
    }
});

// Google maps
function initMap() {
       var uluru = {lat: 65.5836845, lng: 22.1370647};
       var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 13,
         center: uluru,
         scrollwheel: false
       });
       var marker = new google.maps.Marker({
         position: uluru,
         map: map
       });
     }
