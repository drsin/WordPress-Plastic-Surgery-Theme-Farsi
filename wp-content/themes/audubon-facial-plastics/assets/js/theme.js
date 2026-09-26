document.addEventListener('DOMContentLoaded', function() {
    var toggle = document.querySelector('.mobile-nav-toggle');
    var nav = document.querySelector('.primary-nav');
    if (toggle && nav) {
        toggle.addEventListener('click', function() {
            nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', nav.classList.contains('is-open') ? 'true' : 'false');
        });
    }
});
