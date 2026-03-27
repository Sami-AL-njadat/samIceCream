    <section id="location" class="location-section">
        <div class="container">
            <div class="section-title">
                <h2>Service <span class="title-gradient">Areas</span></h2>
                <div class="title-underline"></div>
                <p class="section-subtitle">We serve the greater Chicago area</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="location-info">
                        <h3>Where We Serve</h3>
                        <p>Our ice cream truck proudly serves the following areas in Illinois:</p>

                        <div class="service-areas">
                            <div class="area-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <h4>Chicago</h4>
                                    <p>All neighborhoods and suburbs</p>
                                </div>
                            </div>
                            <div class="area-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <h4>Wheaton</h4>
                                    <p>Residential areas and events</p>
                                </div>
                            </div>
                            <div class="area-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <h4>St. Charles</h4>
                                    <p>Complete coverage throughout the city</p>
                                </div>
                            </div>
                            <div class="area-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <h4>Batavia</h4>
                                    <p>Residential and event locations</p>
                                </div>
                            </div>
                        </div>

                        <div class="location-contact">
                            <h4>Contact Information</h4>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <a class="infocontact" href="tel:+17087458108"><span>+1 (708) 745-8108</span></a>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:samicecream52@gmail.com">
                                    <span class="infocontact">samicecream52@<span>gmail.com</span>
                                    </span></a>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-clock"></i>
                                <span class="infocontact">Sunday-Saturday: 10AM - 11PM</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190255.26356333735!2d-88.2527!3d41.8781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL!5e0!3m2!1sen!2sus!4v1234567890"
                            width="100%" height="100%" style="border:0; border-radius: 20px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div class="location-gallery-card">
                        <h4>Photo Gallery</h4>
                        <p>Tap any photo to view in fullscreen.</p>
                        <div class="location-gallery-grid" id="locationGalleryGrid">
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/Wheaton-Chicagos-sam-ice-cream.webp') }}"
                                aria-label="Open Chicago Ice Cream Truck photo">
                                <img loading="lazy"  src="{{ asset('image/customer/Wheaton-Chicagos-sam-ice-cream.webp') }}"
                                    alt="Chicago Ice Cream Truck">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/chicago-iceCream.webp') }}"
                                aria-label="Open Chicago Ice Cream photo">
                                <img  loading="lazy" src="{{ asset('image/customer/chicago-iceCream.webp') }}" alt="Chicago Ice Cream">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/sam-ice-cream-truck.webp') }}"
                                aria-label="Open Sam Ice Cream Truck photo">
                                <img  loading="lazy" src="{{ asset('image/customer/sam-ice-cream-truck.webp') }}"
                                    alt="Sam Ice Cream Truck">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/Wheaton-ice-cream-truck-ice.webp') }}"
                                aria-label="Open Wheaton Ice Cream Truck photo">
                                <img  loading="lazy" src="{{ asset('image/customer/Wheaton-ice-cream-truck-ice.webp') }}"
                                    alt="Wheaton Ice Cream Truck">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/chicago-Wheaton.webp') }}"
                                aria-label="Open Chicago Wheaton photo">
                                <img  loading="lazy" src="{{ asset('image/customer/chicago-Wheaton.webp') }}" alt="Chicago Wheaton">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/sam-truck.webp') }}"
                                aria-label="Open Chicago Wheaton truck ice cream photo">
                                <img loading="lazy" src="{{ asset('image/customer/sam-truck.webp') }}"
                                    alt="Chicago Wheaton Truck Ice Cream">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="galleryModal" class="gallery-modal" aria-hidden="true">
            <div class="gallery-modal-stage">
                <button type="button" id="galleryCloseBtn" class="gallery-close-btn"
                    aria-label="Close gallery">X</button>
                <button type="button" id="galleryPrevBtn" class="gallery-nav-btn gallery-prev-btn"
                    aria-label="Previous photo">&#10094;</button>
                <div class="gallery-modal-content">
                    <img id="galleryModalImage" src="" alt="Gallery photo">
                </div>
                <button type="button" id="galleryNextBtn" class="gallery-nav-btn gallery-next-btn"
                    aria-label="Next photo">&#10095;</button>
            </div>
        </div>
    </section>
