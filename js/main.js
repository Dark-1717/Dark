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
        // effect: 'slide', // Changed to 'creative'
        speed: 1000, // Adjusted speed for creative effect visibility
        grabCursor: true, // Good for creative effects
        effect: 'creative',
        creativeEffect: {
            // For Creative Effect, `prev` defines transformations for the slide that is moving out of view (becoming previous)
            // Swiper then animates the outgoing slide from its normal state TO this `prev` state.
            prev: {
                shadow: true,
                translate: ['-100%', 0, -500], // Slide far left and back
                rotate: [0, 0, -25],          // Rotate out
                opacity: 0,                    // Fade out
                scale: 0.8,                    // Scale down
            },
            // `next` defines transformations for the slide that is moving into view (becoming next)
            // Swiper then animates the incoming slide FROM this `next` state TO its normal state (center, full opacity/scale).
            next: {
                shadow: true,
                translate: ['100%', 0, -500],  // Come from far right and back
                rotate: [0, 0, 25],           // Rotate in
                opacity: 0,                     // Start transparent
                scale: 0.8,                     // Start scaled down
            },
            // progressMultiplier: 1, // Can be used to make the effect more sensitive to swipe/drag gestures
            // slideShadows: true,
            // on: {
            //     setTransition: function (swiper, transition) {
            //         for (var i = 0; i < swiper.slides.length; i++) {
            //             var slide = swiper.slides[i];
            //             slide.style.transition = transition + "ms";
            //         }
            //     },
            //     setTranslate: function (swiper) {
            //         var slides = swiper.slides;
            //         for (var i = 0; i < slides.length; i++) {
            //             var slide = slides[i];
            //             var progress = slide.progress;
            //             var opacity = 1 - Math.abs(progress / 2);
            //             var scale = 1 - Math.abs(progress / 4);
            //             var translateZ = -Math.abs(progress * 100);
            //             slide.style.opacity = opacity;
            //             slide.style.transform = 'translate3d(0,0,' + translateZ + 'px) scale(' + scale + ')';
            //         }
            //     }
            // }
        },
        // autoplay: { // Disabled for mouse interaction
        //     delay: 7000,
        //     disableOnInteraction: false,
        // },

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

    // Mouse Move Interaction for Hero Swiper
    const heroSwiperContainer = document.querySelector('.hero-swiper');
    if (heroSwiperContainer && heroSwiper.slides.length > 1) { // Ensure swiper instance and container exist
        let mouseMoveTimeout;
        const slideChangeDelay = 150; // ms - throttle slide changes

        heroSwiperContainer.addEventListener('mousemove', function(event) {
            clearTimeout(mouseMoveTimeout);
            mouseMoveTimeout = setTimeout(function() {
                const rect = heroSwiperContainer.getBoundingClientRect();
                const mouseX = event.clientX - rect.left; // Mouse X relative to the slider
                const sliderWidth = rect.width;

                // Calculate which slide segment the mouse is in
                const numberOfSlides = heroSwiper.params.slidesPerView === 'auto' ? heroSwiper.slides.length : heroSwiper.params.slidesPerView;
                // For loop mode, we use realIndex to map to original slide count if slidesPerView is 1
                const totalSegments = heroSwiper.slides.length / (heroSwiper.params.slidesPerGroup || 1) ; // This might need adjustment based on loop and slidesPerGroup

                // Simplified approach: map mouse X directly to a slide index based on original number of slides (before loop duplication)
                const originalSlidesCount = heroSwiper.el.querySelectorAll('.swiper-slide:not(.swiper-slide-duplicate)').length;
                const segmentWidth = sliderWidth / originalSlidesCount;
                let targetSlideRealIndex = Math.floor(mouseX / segmentWidth);

                // Clamp the index to be within valid bounds of original slides
                targetSlideRealIndex = Math.max(0, Math.min(targetSlideRealIndex, originalSlidesCount - 1));

                if (heroSwiper.realIndex !== targetSlideRealIndex) {
                    heroSwiper.slideToLoop(targetSlideRealIndex, heroSwiper.params.speed / 2 ); // Use half of transition speed for quicker reaction
                }
            }, slideChangeDelay);
        });

        // Optional: Pause slide change on mouse leave and resume on enter, or reset to first slide
        // heroSwiperContainer.addEventListener('mouseleave', function() {
        //     clearTimeout(mouseMoveTimeout);
        //     // heroSwiper.slideToLoop(0, heroSwiper.params.speed); // Example: return to first slide
        // });
    }
});
