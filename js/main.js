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

    // Hero Swiper Initialization
    // For more Swiper API options, see: https://swiperjs.com/swiper-api
    const heroSwiper = new Swiper('.hero-swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        effect: 'slide', // Can be 'fade', 'cube', 'coverflow', 'flip'
        autoplay: {
            delay: 7000, // Time between slides in ms
            disableOnInteraction: false, // Autoplay will not be disabled after user interactions (swipes)
        },
        speed: 800, // Transition speed in ms

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // Accessibility
        a11y: {
            prevSlideMessage: 'Previous slide',
            nextSlideMessage: 'Next slide',
            paginationBulletMessage: 'Go to slide {{index}}',
        },

        // Watch for active slide changes to re-trigger animations if needed by a more complex setup
        // For the current CSS setup (.swiper-slide-active), this is mostly handled by Swiper's classing.
        // However, if animations needed to be reset and replayed explicitly:
        on: {
            slideChangeTransitionStart: function () {
                // Optional: If elements weren't purely CSS animated based on swiper-slide-active
                // you could remove animation classes from all slides here.
                // e.g., this.slides.forEach(slide => {
                //   slide.querySelectorAll('.animated-element').forEach(el => el.classList.remove('animate-in'));
                // });
            },
            slideChangeTransitionEnd: function () {
                // Optional: And add them to the active slide here.
                // e.g. const activeSlide = this.slides[this.activeIndex];
                // activeSlide.querySelectorAll('.animated-element').forEach(el => el.classList.add('animate-in'));
            }
        }
    });
});
