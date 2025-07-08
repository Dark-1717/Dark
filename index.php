<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKD Travel - Discover Sri Lanka</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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

    <!-- Hero Section - Swiper Slideshow -->
    <section id="hero">
        <!-- Swiper -->
        <div class="swiper-container hero-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide" style="background-image: url('images/hero-slide-1.jpg');">
                    <div class="hero-slide-overlay"></div>
                    <div class="container hero-slide-content">
                        <div class="hero-business-info">
                            <!-- CMS: Business Info -->
                            <p>LKD Travel / Est. 2005</p>
                        </div>
                        <!-- Placeholder for custom JS Animated Rotating Text -->
                        <div class="hero-rotating-text-placeholder">
                            <!-- CMS: Rotating Text Items -->
                            <span>Explore</span>
                            <span>Discover</span>
                            <span>Experience</span>
                        </div>
                        <!-- CMS: Leading Text -->
                        <h1 class="hero-leading-text">Adventure Awaits in Serene Sri Lanka</h1>
                        <!-- CMS: Caption -->
                        <p class="hero-caption">Unforgettable journeys tailored just for you. Witness breathtaking landscapes and vibrant cultures.</p>
                        <!-- CMS: CTA Button Text & Link. data-video-id for JS lightbox. -->
                        <a href="#" class="btn btn-primary hero-slide-cta" data-video-id="VIDEO_ID_1">Watch Our Story (Video Lightbox)</a>
                    </div>
                </div>
                <!-- Slide 2 - CMS: All content for slide 2 (bg image, texts, cta, video_id) -->
                <div class="swiper-slide" style="background-image: url('images/hero-slide-2.jpg');">
                    <div class="hero-slide-overlay"></div>
                    <div class="container hero-slide-content">
                        <div class="hero-business-info">
                            <p>Your Trusted Travel Partner</p>
                        </div>
                        <div class="hero-rotating-text-placeholder">
                            <span>Culture</span>
                            <span>Nature</span>
                            <span>Relaxation</span>
                        </div>
                        <h1 class="hero-leading-text">Immerse in Rich Cultural Heritage</h1>
                        <p class="hero-caption">From ancient temples to colonial charm, explore the island's timeless tales.</p>
                        <a href="#" class="btn btn-primary hero-slide-cta" data-video-id="VIDEO_ID_2">Discover More (Video Lightbox)</a>
                    </div>
                </div>
                <!-- Slide 3 - CMS: All content for slide 3 -->
                <div class="swiper-slide" style="background-image: url('images/hero-slide-3.jpg');">
                    <div class="hero-slide-overlay"></div>
                    <div class="container hero-slide-content">
                         <div class="hero-business-info">
                            <p>Award Winning Service</p>
                        </div>
                        <div class="hero-rotating-text-placeholder">
                            <span>Beaches</span>
                            <span>Mountains</span>
                            <span>Wildlife</span>
                        </div>
                        <h1 class="hero-leading-text">Pristine Beaches & Lush Highlands</h1>
                        <p class="hero-caption">Relax on golden sands or trek through emerald tea plantations.</p>
                        <a href="#" class="btn btn-primary hero-slide-cta" data-video-id="VIDEO_ID_3">See Gallery (Video Lightbox)</a>
                    </div>
                </div>
                <!-- Slide 4 - CMS: All content for slide 4 -->
                <div class="swiper-slide" style="background-image: url('images/hero-slide-4.jpg');">
                    <div class="hero-slide-overlay"></div>
                    <div class="container hero-slide-content">
                        <div class="hero-business-info">
                            <p>Tailored Experiences</p>
                        </div>
                        <div class="hero-rotating-text-placeholder">
                            <span>Luxury</span>
                            <span>Adventure</span>
                            <span>Wellness</span>
                        </div>
                        <h1 class="hero-leading-text">Luxury Meets Wild Adventure</h1>
                        <p class="hero-caption">Indulge in premium comfort while exploring the untamed beauty of Sri Lanka.</p>
                        <a href="#" class="btn btn-primary hero-slide-cta" data-video-id="VIDEO_ID_4">Plan Your Escape (Video Lightbox)</a>
                    </div>
                </div>
                <!-- Slide 5 - CMS: All content for slide 5 -->
                <div class="swiper-slide" style="background-image: url('images/hero-slide-5.jpg');">
                    <div class="hero-slide-overlay"></div>
                    <div class="container hero-slide-content">
                        <div class="hero-business-info">
                            <p>Book Your Dream Vacation</p>
                        </div>
                        <div class="hero-rotating-text-placeholder">
                            <span>Memories</span>
                            <span>Journeys</span>
                            <span>Dreams</span>
                        </div>
                        <h1 class="hero-leading-text">Create Lasting Memories With Us</h1>
                        <p class="hero-caption">Let us craft your perfect Sri Lankan holiday. Adventure is calling!</p>
                        <a href="#packages" class="btn btn-primary hero-slide-cta">Explore Packages</a>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
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

    <!-- SwiperJS JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script> <!-- For JavaScript interactions -->
</body>
</html>
