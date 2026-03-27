// ========================================
// Desktop Stack
// ========================================
const stack = document.getElementById("stack");
if (stack) {
    const cards = Array.from(stack.children);
    const wheel = document.getElementById("wheel");

    let order = [...cards];
    let index = 0;
    let busy = false;

    // build wheel dots
    cards.forEach((_, i) => {
        const d = document.createElement("div");
        d.className = "wheel-dot" + (i === 0 ? " active" : "");
        wheel.appendChild(d);
    });

    const dots = [...wheel.children];

    function render() {
        order.forEach((card, i) => {
            card.style.zIndex = order.length - i;
            card.style.transform = `
                translateY(${i * 20}px)
                scale(${1 - i * 0.06})
            `;
            card.style.opacity = i > 3 ? 0 : 1;
        });
        dots.forEach((d, i) => d.classList.toggle("active", i === index));
    }

    render();

    function next() {
        if (busy || index >= cards.length - 1) return;
        busy = true;
        order.push(order.shift());
        index++;
        render();
        setTimeout(() => (busy = false), 450);
    }

    function prev() {
        if (busy || index <= 0) return;
        busy = true;
        order.unshift(order.pop());
        index--;
        render();
        setTimeout(() => (busy = false), 450);
    }

    stack.addEventListener(
        "wheel",
        (e) => {
            if (!stack.matches(":hover")) return;
            e.preventDefault();
            e.deltaY > 0 ? next() : prev();
        },
        { passive: false },
    );

    let startY = 0;
    stack.addEventListener(
        "touchstart",
        (e) => {
            startY = e.touches[0].clientY;
            e.stopPropagation();
        },
        { passive: true },
    );

    stack.addEventListener(
        "touchmove",
        (e) => {
            e.preventDefault();
            e.stopPropagation();
        },
        { passive: false },
    );

    stack.addEventListener("touchend", (e) => {
        const endY = e.changedTouches[0].clientY;
        e.stopPropagation();
        if (startY - endY > 50) next();
        if (endY - startY > 50) prev();
    });
}

// ========================================
// Mobile Stack
// ========================================
const stackMobile = document.getElementById("stackMobile");
if (stackMobile) {
    const cardsMobile = Array.from(stackMobile.children);
    const wheelMobile = document.getElementById("wheelMobile");

    let orderMobile = [...cardsMobile];
    let indexMobile = 0;
    let busyMobile = false;

    // build wheel dots
    cardsMobile.forEach((_, i) => {
        const d = document.createElement("div");
        d.className = "wheel-dot" + (i === 0 ? " active" : "");
        wheelMobile.appendChild(d);
    });

    const dotsMobile = [...wheelMobile.children];

    function renderMobile() {
        orderMobile.forEach((card, i) => {
            card.style.zIndex = cardsMobile.length - i;
            card.style.transform = `
                translateY(${i * 20}px)
                scale(${1 - i * 0.06})
            `;
            card.style.opacity = i > 3 ? 0 : 1;
        });
        dotsMobile.forEach((d, i) =>
            d.classList.toggle("active", i === indexMobile),
        );
    }

    renderMobile();

    function nextMobile() {
        if (busyMobile || indexMobile >= cardsMobile.length - 1) return;
        busyMobile = true;
        orderMobile.push(orderMobile.shift());
        indexMobile++;
        renderMobile();
        setTimeout(() => (busyMobile = false), 450);
    }

    function prevMobile() {
        if (busyMobile || indexMobile <= 0) return;
        busyMobile = true;
        orderMobile.unshift(orderMobile.pop());
        indexMobile--;
        renderMobile();
        setTimeout(() => (busyMobile = false), 450);
    }

    stackMobile.addEventListener(
        "wheel",
        (e) => {
            if (!stackMobile.matches(":hover")) return;
            e.preventDefault();
            e.deltaY > 0 ? nextMobile() : prevMobile();
        },
        { passive: false },
    );

    // ✅ الإصلاح: منع الصفحة من السكرول عند التفاعل مع الـ stack
    let startYMobile = 0;
    stackMobile.addEventListener(
        "touchstart",
        (e) => {
            startYMobile = e.touches[0].clientY;
            e.stopPropagation();
        },
        { passive: true },
    );

    stackMobile.addEventListener(
        "touchmove",
        (e) => {
            e.preventDefault(); // يمنع سكرول الصفحة
            e.stopPropagation(); // يمنع وصول الحدث للـ slider
        },
        { passive: false },
    );

    stackMobile.addEventListener("touchend", (e) => {
        const endY = e.changedTouches[0].clientY;
        e.stopPropagation();
        if (startYMobile - endY > 50) nextMobile();
        if (endY - startYMobile > 50) prevMobile();
    });
}

// ========================================
// Mobile Slider Dots
// ========================================
const mobileSlider = document.getElementById("mobileSlider");
const sliderDots = document.getElementById("sliderDots");

if (mobileSlider && sliderDots) {
    const dots = sliderDots.querySelectorAll(".dot");

    mobileSlider.addEventListener("scroll", () => {
        const currentSlide = Math.round(
            mobileSlider.scrollLeft / mobileSlider.offsetWidth,
        );
        dots.forEach((dot, i) =>
            dot.classList.toggle("active", i === currentSlide),
        );
    });

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            mobileSlider.scrollTo({
                left: mobileSlider.offsetWidth * index,
                behavior: "smooth",
            });
        });
    });
}

// ========================================
// Products Scroll Dots
// ========================================
const productsWrapper = document.querySelector(".products-scroll-wrapper");
const productsDotsContainer = document.getElementById("productsDots");

if (productsWrapper && productsDotsContainer) {
    const productCards = productsWrapper.querySelectorAll(".product-card-new");

    productCards.forEach((_, index) => {
        const dot = document.createElement("div");
        dot.className = "product-dot" + (index === 0 ? " active" : "");
        productsDotsContainer.appendChild(dot);
    });

    const productDots = productsDotsContainer.querySelectorAll(".product-dot");

    productsWrapper.addEventListener("scroll", () => {
        const cardWidth = productCards[0].offsetWidth + 32;
        const currentCard = Math.round(productsWrapper.scrollLeft / cardWidth);
        productDots.forEach((dot, i) =>
            dot.classList.toggle("active", i === currentCard),
        );
    });

    productDots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            const cardWidth = productCards[0].offsetWidth + 32;
            productsWrapper.scrollTo({
                left: cardWidth * index,
                behavior: "smooth",
            });
        });
    });
}

// ========================================
// Preloader
// ========================================
(function () {
    const preloader = document.getElementById("preloader");
    if (!preloader) return;

    function hidePreloader() {
        preloader.classList.add("exit");
        setTimeout(() => {
            preloader.classList.add("done");
            document.body.style.overflow = "";
        }, 1100);
    }

    // Hide overflow while loading
    document.body.style.overflow = "hidden";

    // Trigger on window load (all assets loaded)
    if (document.readyState === "complete") {
        setTimeout(hidePreloader, 3000);
    } else {
        window.addEventListener("load", () => {
            setTimeout(hidePreloader, 3000);
        });
    }
})();

// ========================================
// Location Gallery Modal
// ========================================
(function () {
    const galleryItems = Array.from(
        document.querySelectorAll("[data-gallery-item]"),
    );
    const galleryModal = document.getElementById("galleryModal");
    const modalImage = document.getElementById("galleryModalImage");
    const closeBtn = document.getElementById("galleryCloseBtn");
    const prevBtn = document.getElementById("galleryPrevBtn");
    const nextBtn = document.getElementById("galleryNextBtn");

    if (
        !galleryItems.length ||
        !galleryModal ||
        !modalImage ||
        !closeBtn ||
        !prevBtn ||
        !nextBtn
    )
        return;

    let currentIndex = 0;
    let touchStartX = 0;
    let touchEndX = 0;

    function renderImage() {
        const item = galleryItems[currentIndex];
        const src = item.getAttribute("data-src");
        const previewImage = item.querySelector("img");
        modalImage.src = src || "";
        modalImage.alt = previewImage ? previewImage.alt : "Gallery photo";
    }

    function openModal(index) {
        currentIndex = index;
        renderImage();
        galleryModal.classList.add("show");
        galleryModal.setAttribute("aria-hidden", "false");
    }

    function closeModal() {
        galleryModal.classList.remove("show");
        galleryModal.setAttribute("aria-hidden", "true");
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % galleryItems.length;
        renderImage();
    }

    function prevImage() {
        currentIndex =
            (currentIndex - 1 + galleryItems.length) % galleryItems.length;
        renderImage();
    }

    galleryItems.forEach((item, index) => {
        item.addEventListener("click", () => openModal(index));
    });

    nextBtn.addEventListener("click", nextImage);
    prevBtn.addEventListener("click", prevImage);
    closeBtn.addEventListener("click", closeModal);

    galleryModal.addEventListener("click", (e) => {
        if (e.target === galleryModal) closeModal();
    });

    document.addEventListener("keydown", (e) => {
        if (!galleryModal.classList.contains("show")) return;
        if (e.key === "Escape") closeModal();
        if (e.key === "ArrowRight") nextImage();
        if (e.key === "ArrowLeft") prevImage();
    });

    galleryModal.addEventListener(
        "touchstart",
        (e) => {
            touchStartX = e.changedTouches[0].screenX;
        },
        { passive: true },
    );

    galleryModal.addEventListener(
        "touchend",
        (e) => {
            touchEndX = e.changedTouches[0].screenX;
            const swipeDistance = touchStartX - touchEndX;
            if (swipeDistance > 50) nextImage();
            if (swipeDistance < -50) prevImage();
        },
        { passive: true },
    );
})();

// ========================================
// Contact Form
// ========================================
(function () {
    const form = document.getElementById("contactForm");
    const success = document.getElementById("successMsg");

    const btn = document.getElementById("submitBtn");
    const spinner = document.getElementById("btnSpinner");
    const btnText = document.getElementById("btnText");
    const resetBtn = document.getElementById("resetFormBtn");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        document
            .querySelectorAll(".error-text")
            .forEach((el) => (el.innerHTML = ""));

        spinner.style.display = "inline-block";
        btnText.style.display = "none";

        const formData = new FormData(form);

        fetch(form.action, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN":
                    document.querySelector("input[name=_token]").value,
                Accept: "application/json",
            },
        })
            .then(async (response) => {
                if (!response.ok) {
                    spinner.style.display = "none";
                    btnText.style.display = "inline";

                    const data = await response.json();

                    if (data.errors) {
                        for (let field in data.errors) {
                            const el = document.getElementById(
                                "error_" + field,
                            );

                            if (el) {
                                el.innerText = data.errors[field][0];
                            }
                        }
                    }

                    return;
                }

                return response.json();
            })

            .then((data) => {
                if (!data) return;

                spinner.style.display = "none";
                btnText.style.display = "inline";

                if (data.status) {
                    form.style.display = "none";
                    success.classList.add("show");
                }
            })

            .catch((error) => {
                spinner.style.display = "none";
                btnText.style.display = "inline";

                console.error(error);
            });
    });

    if (resetBtn) {
        resetBtn.addEventListener("click", function () {
            const form = document.getElementById("contactForm");
            const success = document.getElementById("successMsg");

            form.reset();

            success.classList.remove("show");

            form.style.display = "block";

            setTimeout(() => {
                form.style.opacity = "1";
            }, 100);
        });
    }
})();
