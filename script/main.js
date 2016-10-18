$('.has-dropdown > a').on('click', function(e){
    e.preventDefault();

    var el = $(this);
    var targetSelector = el.attr('href');
    var target = $(targetSelector);
    target.toggleClass('hidden');
});


// Responsive menu toggle
var documentEl = document.documentElement;
var toggleNav = document.getElementById('toggle-nav');
var nav = document.getElementById('nav');

toggleNav.addEventListener('click', function(e) {
    e.preventDefault();

    documentEl.classList.toggle('nav-open');
});
