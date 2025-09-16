document.addEventListener('DOMContentLoaded', () => {
    // Theme Toggle Functionality
    const themeToggleButton = document.getElementById('theme-toggle-button');
    const currentTheme = localStorage.getItem('theme');
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');

    function applyTheme(theme) {
        if (theme === 'dark') {
            document.body.classList.add('dark-mode');
            themeToggleButton.textContent = 'Light Mode';
        } else {
            document.body.classList.remove('dark-mode');
            themeToggleButton.textContent = 'Dark Mode';
        }
    }

    // Initialize theme
    if (currentTheme) {
        applyTheme(currentTheme);
    } else if (prefersDarkScheme.matches) {
        applyTheme('dark');
        localStorage.setItem('theme', 'dark'); // Save system preference if no user preference
    } else {
        applyTheme('light'); // Default to light if no preference and system is not dark
    }

    themeToggleButton.addEventListener('click', () => {
        let theme = document.body.classList.contains('dark-mode') ? 'light' : 'dark';
        localStorage.setItem('theme', theme);
        applyTheme(theme);
    });

    // Listen for changes in system preference
    prefersDarkScheme.addEventListener('change', (e) => {
        if (!localStorage.getItem('theme')) { // Only apply if user hasn't set a preference
            applyTheme(e.matches ? 'dark' : 'light');
        }
    });

    // Responsive Navigation (Hamburger Menu)
    const mobileMenuButton = document.getElementById('mobile-menu');
    const navLinks = document.querySelector('.nav-links');

    if (mobileMenuButton && navLinks) {
        mobileMenuButton.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            // Optional: Change hamburger icon to X
            mobileMenuButton.classList.toggle('is-active');
        });

        // Close menu when a link is clicked (for single-page applications)
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                if (navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                    mobileMenuButton.classList.remove('is-active');
                }
            });
        });
    }


    // Language Switcher (Placeholder Functionality)
    const langEnButton = document.getElementById('lang-en');
    const langHiButton = document.getElementById('lang-hi');

    if (langEnButton) {
        langEnButton.addEventListener('click', () => {
            console.log('Switching to English (placeholder)');
            alert('Language set to English (Full translation feature not yet implemented).');
            // Here you would typically load the English content
            // For now, we can assume English is default or just provide feedback.
        });
    }

    if (langHiButton) {
        langHiButton.addEventListener('click', () => {
            console.log('Switching to Hindi (placeholder)');
            alert('भाषा को हिंदी में सेट करें (पूर्ण अनुवाद सुविधा अभी तक लागू नहीं हुई है।).');
            // Here you would typically load the Hindi content.
            // This would involve having translated strings and updating the DOM.
        });
    }

    // Contact Form (Placeholder - Prevent Default Submission & Log Data)
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Prevent actual submission for now
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            console.log('Contact Form Submitted:');
            console.log('Name:', name);
            console.log('Email:', email);
            console.log('Message:', message);

            alert('Thank you for your message! (This is a demo, form data logged to console.)');
            contactForm.reset(); // Clear the form
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if(targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

});
