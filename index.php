<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKD Travel - Discover Sri Lanka</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Navigation Bar -->
    <header id="main-header">
        <nav id="navbar">
            <div class="container">
                <a href="index.php" id="logo">LKD Travel</a>
                <ul id="nav-links">
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#destinations">Destinations</a></li>
                    <li><a href="#packages">Packages</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="menu-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <h1>Discover Sri Lanka's Wonders</h1>
            <p>Your journey to the pearl of the Indian Ocean begins here.</p>
            <a href="#packages" class="btn btn-primary">Explore Packages</a>
        </div>
    </section>

    <!-- Introduction/About Snippet -->
    <section id="about" class="py-2">
        <div class="container">
            <h2>Welcome to LKD Travel</h2>
            <p class="lead-text">Experience the magic of Sri Lanka with experts who care. We craft unforgettable journeys tailored to your dreams.</p>
        </div>
    </section>

    <!-- Popular Destinations Section -->
    <section id="destinations" class="py-2">
        <div class="container">
            <h2 class="section-title">Popular Destinations</h2>
            <div class="destinations-grid">
                <!-- Destination 1 -->
                <div class="destination-card">
                    <img src="images/ella.jpg" alt="Ella, Sri Lanka">
                    <h3>Ella</h3>
                    <p>Breathtaking views, hiking trails, and the famous Nine Arch Bridge.</p>
                </div>
                <!-- Destination 2 -->
                <div class="destination-card">
                    <img src="images/sigiriya.jpg" alt="Sigiriya, Sri Lanka">
                    <h3>Sigiriya</h3>
                    <p>Ascend the ancient rock fortress for history and panoramic vistas.</p>
                </div>
                <!-- Destination 3 -->
                <div class="destination-card">
                    <img src="images/mirissa.jpg" alt="Mirissa, Sri Lanka">
                    <h3>Mirissa</h3>
                    <p>Golden beaches, whale watching, and vibrant nightlife.</p>
                </div>
                 <!-- Destination 4 (Optional) -->
                <div class="destination-card">
                    <img src="images/kandy.jpg" alt="Kandy, Sri Lanka">
                    <h3>Kandy</h3>
                    <p>The cultural heart, home to the Temple of the Tooth Relic.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-2 bg-light">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="services-grid">
                <div class="service-item">
                    <img src="images/icon-custom-tours.svg" alt="Custom Tours Icon" class="service-icon"> <!-- Placeholder Icon -->
                    <h4>Custom Tours</h4>
                    <p>Personalized itineraries designed around your interests and budget.</p>
                </div>
                <div class="service-item">
                    <img src="images/icon-accomodation.svg" alt="Accommodation Icon" class="service-icon"> <!-- Placeholder Icon -->
                    <h4>Accommodation</h4>
                    <p>Handpicked hotels and villas for a comfortable stay.</p>
                </div>
                <div class="service-item">
                    <img src="images/icon-transport.svg" alt="Transport Icon" class="service-icon"> <!-- Placeholder Icon -->
                    <h4>Transport</h4>
                    <p>Reliable and comfortable transportation across the island.</p>
                </div>
                <div class="service-item">
                    <img src="images/icon-guided-excursions.svg" alt="Guided Excursions Icon" class="service-icon"> <!-- Placeholder Icon -->
                    <h4>Guided Excursions</h4>
                    <p>Knowledgeable local guides for an enriching experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Packages Section -->
    <section id="packages" class="py-2">
        <div class="container">
            <h2 class="section-title">Featured Packages</h2>
            <div class="packages-grid">
                <!-- Package 1 -->
                <div class="package-card">
                    <img src="images/package-cultural.jpg" alt="Cultural Highlights Package">
                    <div class="package-info">
                        <h3>Cultural Highlights Tour</h3>
                        <p class="package-duration">7 Days / 6 Nights</p>
                        <p>Explore ancient cities, sacred temples, and vibrant traditions.</p>
                        <a href="#" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
                <!-- Package 2 -->
                <div class="package-card">
                    <img src="images/package-beach.jpg" alt="Beach Paradise Package">
                     <div class="package-info">
                        <h3>Beach Paradise Getaway</h3>
                        <p class="package-duration">5 Days / 4 Nights</p>
                        <p>Relax on pristine beaches and enjoy thrilling water sports.</p>
                        <a href="#" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
                <!-- Package 3 -->
                <div class="package-card">
                    <img src="images/package-adventure.jpg" alt="Adventure Seeker Package">
                    <div class="package-info">
                        <h3>Adventure Seeker's Dream</h3>
                        <p class="package-duration">10 Days / 9 Nights</p>
                        <p>Hike, raft, and explore the wild side of Sri Lanka.</p>
                        <a href="#" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-2 bg-light">
        <div class="container">
            <h2 class="section-title">What Our Travelers Say</h2>
            <div class="testimonial-slider">
                <!-- Testimonial 1 -->
                <div class="testimonial-item">
                    <p>"LKD Travel made our Sri Lankan dream a reality! Every detail was perfect. Highly recommend!"</p>
                    <h4>- Sarah & Tom W.</h4>
                </div>
                <!-- Testimonial 2 -->
                <div class="testimonial-item">
                    <p>"An unforgettable adventure. The guides were fantastic and the scenery breathtaking. Thank you LKD!"</p>
                    <h4>- John B.</h4>
                </div>
                <!-- Testimonial 3 (Add more as needed) -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-2">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <p class="lead-text">Ready for your Sri Lankan adventure? Contact us today!</p>
            <form id="contact-form" action="submit_form.php" method="POST"> <!-- PHP script for form handling -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer id="main-footer" class="py-2">
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <h3>LKD Travel</h3>
                    <p>Crafting memorable journeys in the heart of Sri Lanka. Your adventure starts with us.</p>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#packages">Packages</a></li>
                        <li><a href="privacy.php">Privacy Policy</a></li> <!-- Placeholder -->
                        <li><a href="terms.php">Terms of Service</a></li> <!-- Placeholder -->
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>Connect With Us</h4>
                    <!-- Replace with actual social media links and icons -->
                    <a href="#"><img src="images/icon-facebook.svg" alt="Facebook"></a>
                    <a href="#"><img src="images/icon-instagram.svg" alt="Instagram"></a>
                    <a href="#"><img src="images/icon-twitter.svg" alt="Twitter"></a>
                </div>
            </div>
            <p class="text-center footer-copyright">&copy; <script>document.write(new Date().getFullYear())</script> LKD Travel. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="js/main.js"></script> <!-- For JavaScript interactions -->
</body>
</html>
