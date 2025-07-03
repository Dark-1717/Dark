// Main JavaScript file for LKD Travel

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const menuToggle = document.getElementById('mobile-menu');
    const navLinks = document.getElementById('nav-links');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            menuToggle.classList.toggle('is-active');
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
                // If mobile menu is open, close it after clicking a link
                if (navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                    menuToggle.classList.remove('is-active');
                }
            }
        });
    });

    // Sticky navigation bar on scroll (basic version)
    const header = document.getElementById('main-header');
    const navbar = document.getElementById('navbar');
    const heroSection = document.getElementById('hero'); // Get the hero section
    let heroHeight = heroSection ? heroSection.offsetHeight : 200; // Get hero height or default

    function stickyNav() {
        if (window.scrollY > heroHeight - navbar.offsetHeight) { // Adjust when navbar should become sticky
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    // Update heroHeight on resize to make it more responsive
    window.addEventListener('resize', () => {
        heroHeight = heroSection ? heroSection.offsetHeight : 200;
    });

    window.addEventListener('scroll', stickyNav);


    // Optional: Basic fade-in animations for sections on scroll
    const sections = document.querySelectorAll('section');
    const options = {
        root: null, // viewport
        threshold: 0.1, // 10% of the item is visible
        rootMargin: "0px 0px -50px 0px" // trigger a bit earlier
    };

    const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // observer.unobserve(entry.target); // Optional: stop observing after it's visible
            } else {
                // Optional: remove visibility if it scrolls out of view and you want it to re-animate
                // entry.target.classList.remove('visible');
            }
        });
    }, options);

    sections.forEach(section => {
        section.classList.add('reveal-on-scroll'); // Add initial class for styling
        observer.observe(section);
    });

});
