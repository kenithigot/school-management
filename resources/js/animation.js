const scrollToTopButton = document.getElementById("scroll-to-top");

// Show button when user scrolls down
window.addEventListener("scroll", () => {
    if (window.pageYOffset > 800) {
        scrollToTopButton.classList.remove("hidden");
    } else {
        scrollToTopButton.classList.add("hidden");
    }
});

const menuToggle = document.getElementById("menuToggle");
const mobileMenu = document.getElementById("mobileMenu");
const closeMenu = document.getElementById("closeMenu");

menuToggle.addEventListener("click", () => {
    mobileMenu.classList.remove("hidden");
});

closeMenu.addEventListener("click", () => {
    mobileMenu.classList.add("hidden");
});

document.addEventListener("DOMContentLoaded", () => {
    const checkpoints = document.querySelectorAll(".animate-checkpoint");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove(
                        "opacity-0",
                        "-translate-x-10"
                    );
                    entry.target.classList.add("opacity-100", "translate-x-0");
                } else {
                    entry.target.classList.remove(
                        "opacity-100",
                        "translate-x-0"
                    );
                    entry.target.classList.add("opacity-0", "-translate-x-10");
                }
            });
        },
        {
            threshold: 0.2,
        }
    );

    checkpoints.forEach((cp) => observer.observe(cp));
});

document.addEventListener("DOMContentLoaded", () => {
    const testimonialCards = document.querySelectorAll(".animate-testimonial");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove(
                        "opacity-0",
                        "scale-50",
                        "-translate-x-1/4",
                        "translate-y-1/4",
                        "rotate-[-10deg]",
                        "blur-sm"
                    );
                    entry.target.classList.add(
                        "opacity-100",
                        "scale-100",
                        "translate-x-0",
                        "translate-y-0",
                        "rotate-0",
                        "blur-0"
                    );
                } else {
                    entry.target.classList.remove(
                        "opacity-100",
                        "scale-100",
                        "translate-x-0",
                        "translate-y-0",
                        "rotate-0",
                        "blur-0"
                    );
                    entry.target.classList.add(
                        "opacity-0",
                        "scale-50",
                        "-translate-x-1/4",
                        "translate-y-1/4",
                        "rotate-[-10deg]",
                        "blur-sm"
                    );
                }
            });
        },
        {
            threshold: 0.2,
        }
    );

    testimonialCards.forEach((card) => observer.observe(card));
});

document.addEventListener("DOMContentLoaded", () => {
    const impactSections = document.querySelectorAll(".animate-impact-section");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove(
                        "opacity-0",
                        "translate-y-10"
                    );
                    entry.target.classList.add("opacity-100", "translate-y-0");
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    impactSections.forEach((section) => observer.observe(section));
});

document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".animate-fade-section");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("opacity-100");
                    entry.target.classList.remove("opacity-0");
                } else {
                    entry.target.classList.remove("opacity-100");
                    entry.target.classList.add("opacity-0");
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    sections.forEach((section) => observer.observe(section));
});

document.addEventListener("DOMContentLoaded", () => {
    const heading = document.getElementById("scrollHeading");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    heading.classList.remove("opacity-0", "translate-y-10");
                    heading.classList.add("opacity-100", "translate-y-0");
                } else {
                    heading.classList.remove("opacity-100", "translate-y-0");
                    heading.classList.add("opacity-0", "translate-y-10");
                }
            });
        },
        {
            threshold: 0.2,
        }
    );

    observer.observe(heading);
});

document.addEventListener("DOMContentLoaded", () => {
    const logoItems = document.querySelectorAll(".logo-item");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove(
                        "opacity-0",
                        "translate-y-10"
                    );
                    entry.target.classList.add("opacity-100", "translate-y-0");
                } else {
                    entry.target.classList.remove(
                        "opacity-100",
                        "translate-y-0"
                    );
                    entry.target.classList.add("opacity-0", "translate-y-10");
                }
            });
        },
        {
            threshold: 0.2,
        }
    );

    logoItems.forEach((item) => observer.observe(item));
});

document.addEventListener("DOMContentLoaded", () => {
    const animatedSections = document.querySelectorAll(".animate-fade-section");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove("opacity-0", "translate-y-5");
                    entry.target.classList.add("opacity-100", "translate-y-0");
                    // Optional: stop observing once it's shown
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    animatedSections.forEach((section) => observer.observe(section));
});

document.addEventListener('DOMContentLoaded', function () {
    const toggleIcons = document.querySelectorAll('.password-toggle');

    toggleIcons.forEach(function (icon) {
        icon.addEventListener('click', function () {
            const id = this.getAttribute('data-target');
            togglePasswordVisibility(id);
        });
    });

    function togglePasswordVisibility(id) {
        var passwordField = document.getElementById(id);
        var eyeIcon = document.getElementById('eye-icon-' + id);

        if (!passwordField || !eyeIcon) return; // Safety check

        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = "password";
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
});

