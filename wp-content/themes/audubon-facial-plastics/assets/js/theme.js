document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function () {
            mainNav.classList.toggle('is-open');
            menuToggle.setAttribute('aria-expanded', String(mainNav.classList.contains('is-open')));
        });
    }

    const revealItems = document.querySelectorAll('.service-card, .team-card, .blog-card, .gallery-item, .testimonial-item');
    revealItems.forEach(function (item, index) {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'opacity 0.7s ease ' + (index * 0.08) + 's, transform 0.7s ease ' + (index * 0.08) + 's';

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.2 });

        observer.observe(item);
    });
});
