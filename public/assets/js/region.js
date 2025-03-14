// Initialize Swiper
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(() => {
    const swiper = new Swiper('.swiper', {
        loop: true,
        pagination: {
        el: '.swiper-pagination',
        clickable: true
        },
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        autoplay: {
          delay: 3000, // Ajusta el tiempo del autoplay
        disableOnInteraction: false,
        },
    });
    }, 100);
});

    // Smooth scrolling for navigation links
    document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            window.scrollTo({
            top: targetElement.offsetTop - 80,
            behavior: 'smooth'
        });
        }
    });
    });

    // Add active class to nav links on scroll
    window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('nav a');

        let current = '';

        sections.forEach(section => {
        const sectionTop = section.offsetTop;
        if (window.pageYOffset >= sectionTop - 100) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').substring(1) === current) {
        link.classList.add('active');
        }
    });
    });
