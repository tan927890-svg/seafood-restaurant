document.addEventListener("DOMContentLoaded", function () {

    /* ================= SMOOTH SCROLL ================= */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (!target) return;

            e.preventDefault();
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

            const navMenu = document.querySelector('.nav-menu');
            if (navMenu) navMenu.classList.remove('active');
        });
    });


    /* ================= MOBILE MENU ================= */
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    }


    /* ================= NOTIFICATION ================= */
    window.closeNotification = function () {
        const notification = document.getElementById('notification');
        if (!notification) return;

        notification.style.animation = 'slideOut 0.5s ease-out';
        setTimeout(() => notification.remove(), 500);
    };

    const notification = document.getElementById('notification');
    if (notification) {
        setTimeout(closeNotification, 5000);
    }


    /* ================= HEADER SHRINK + FIXED ================= */
    const header = document.querySelector('.header');

    if (header) {
        window.addEventListener("scroll", () => {
            header.classList.toggle("shrink", window.scrollY > 120);
        });
    }


    /* ================= INTERSECTION ANIMATION ================= */
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'fadeInUp 0.8s ease-out';
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    document
        .querySelectorAll('.menu-item, .feature-card, .gallery-item')
        .forEach(el => observer.observe(el));


    /* ================= KEYFRAME ================= */
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideOut {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(400px); opacity: 0; }
        }
    `;
    document.head.appendChild(style);

});
