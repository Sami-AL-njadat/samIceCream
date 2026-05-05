    <section id="about" class="about-section">
        <div class="container">
            <div class="section-title">
                <h2>About <span class="title-gradient">Us</span></h2>
                <div class="title-underline"></div>
                <p class="section-subtitle">Sam Ice Cream Truck — Sweet memories since 2015</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="about-content">
                        <h3>Sweet Memories on Wheels</h3>
                        <p>Since 2019, Sam Ice Cream Truck has been bringing joy and delicious treats to communities
                            across Chicago, Wheaton, St. Charles, and Batavia. We specialize in making your events
                            extra special with our wide selection of premium ice cream products.</p>

                        <div class="about-features">
                            <div class="feature-item">
                                <i class="fas fa-ice-cream"></i>
                                <div>
                                    <h4>Premium Selection</h4>
                                    <p>Wide variety of ice cream flavors and treats</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-truck"></i>
                                <div>
                                    <h4>Mobile Service</h4>
                                    <p>We come directly to your location</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-smile"></i>
                                <div>
                                    <h4>Happy Customers</h4>
                                    <p>10+ years of creating sweet memories</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-star"></i>
                                <div>
                                    <h4>Quality Service</h4>
                                    <p>Professional and reliable team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="location-gallery-card">
                        <h4>Photo Gallery</h4>
                        <p>Tap any photo to view in fullscreen.</p>
                        <div class="location-gallery-grid" id="locationGalleryGrid">
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/Wheaton-Chicagos-sam-ice-cream.webp') }}"
                                aria-label="Open Chicago Ice Cream Truck photo">
                                <img loading="lazy"
                                    src="{{ asset('image/customer/Wheaton-Chicagos-sam-ice-cream.webp') }}"
                                    alt="Chicago Ice Cream Truck">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/samice-cream-truck-chigago.webp') }}"
                                aria-label="Open Sam ice cream truck Chicago photo">
                                <img loading="lazy" src="{{ asset('image/customer/samice-cream-truck-chigago.webp') }}"
                                    alt="Sam Ice Cream Truck Chicago">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/chicago-iceCream.webp') }}"
                                aria-label="Open Chicago Ice Cream photo">
                                <img loading="lazy" src="{{ asset('image/customer/chicago-iceCream.webp') }}"
                                    alt="Chicago Ice Cream">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/chigago-ice-cream.webp') }}"
                                aria-label="Open Chicago ice cream photo 2">
                                <img loading="lazy" src="{{ asset('image/customer/chigago-ice-cream.webp') }}"
                                    alt="Chicago Ice Cream Truck">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/sam-ice-cream-truck.webp') }}"
                                aria-label="Open Sam Ice Cream Truck photo">
                                <img loading="lazy" src="{{ asset('image/customer/sam-ice-cream-truck.webp') }}"
                                    alt="Sam Ice Cream Truck">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/Wheaton-ice-cream-truck-ice.webp') }}"
                                aria-label="Open Wheaton Ice Cream Truck photo">
                                <img loading="lazy" src="{{ asset('image/customer/Wheaton-ice-cream-truck-ice.webp') }}"
                                    alt="Wheaton Ice Cream Truck">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/chicago-Wheaton.webp') }}"
                                aria-label="Open Chicago Wheaton photo">
                                <img loading="lazy" src="{{ asset('image/customer/chicago-Wheaton.webp') }}"
                                    alt="Chicago Wheaton">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/chicago-ice-cream-truck.webp') }}"
                                aria-label="Open Chicago ice cream truck photo">
                                <img loading="lazy" src="{{ asset('image/customer/chicago-ice-cream-truck.webp') }}"
                                    alt="Chicago Ice Cream Truck">
                            </button>
                            <button type="button" class="location-gallery-item" data-gallery-item
                                data-src="{{ asset('image/customer/chicago-Wheaton-truck-ice-cream.webp') }}"
                                aria-label="Open Chicago Wheaton truck ice cream photo 2">
                                <img loading="lazy"
                                    src="{{ asset('image/customer/chicago-Wheaton-truck-ice-cream.webp') }}"
                                    alt="Chicago Wheaton Truck Ice Cream">
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
