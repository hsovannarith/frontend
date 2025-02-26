<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Univeristy</title>
</head>

<body class="scroll-hidden bg-gray-50">
    <?php
        include "../component/Home/navbar.php";
        include "../component/Home/carousel.php";
        include "../component/Home/features.php";
        include "../component/Home/event.php";
        include "../component/Home/footer.php";
    ?>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Languages Dropdown Toggle
        const dropdownToggle = document.querySelector("[data-dropdown-toggle='language-dropdown-menu']");
        const dropdownMenu = document.getElementById("language-dropdown-menu");

        if (dropdownToggle && dropdownMenu) {
            dropdownToggle.addEventListener("click", function() {
                dropdownMenu.classList.toggle("hidden");

                const rect = dropdownToggle.getBoundingClientRect();
                dropdownMenu.style.top = `${rect.bottom + window.scrollY}px`;
                dropdownMenu.style.left = `${rect.left + window.scrollX}px`;
            });

            // Close dropdown if clicking outside
            document.addEventListener("click", function(event) {
                if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add("hidden");
                }
            });
        }

        // Academics Dropdown Toggle
        const academicsToggle = document.getElementById("dropdownNavbarLink");
        const academicsMenu = document.getElementById("dropdownNavbar");

        if (academicsToggle && academicsMenu) {
            academicsToggle.addEventListener("click", function(event) {
                event.stopPropagation();
                academicsMenu.classList.toggle("hidden");
                // window.body.style.background = "black";
            });

            // Close dropdown if clicking outside
            document.addEventListener("click", function(event) {
                if (!academicsToggle.contains(event.target) && !academicsMenu.contains(event.target)) {
                    academicsMenu.classList.add("hidden");
                }
            });
        }

        // Mobile Menu Toggle (Fix for Small Screens)
        const mobileMenuToggle = document.querySelector("[data-collapse-toggle='navbar-language']");
        const mobileMenu = document.getElementById("navbar-language");
        const navbar = document.querySelector("nav");

        // Create overlay element
        const overlay = document.createElement("div");
        overlay.classList.add("fixed", "inset-0", "bg-black", "opacity-90", "hidden", "z-40");
        document.body.appendChild(overlay);

        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener("click", function() {
                mobileMenu.classList.toggle("hidden");
                overlay.classList.toggle("hidden");
                navbar.classList.toggle("relative");
                navbar.classList.toggle("z-50");
                mobileMenu.classList.toggle("z-50");
            });

            // Close menu and overlay when clicking outside
            overlay.addEventListener("click", function() {
                mobileMenu.classList.add("hidden");
                overlay.classList.add("hidden");
                navbar.classList.remove("relative", "z-50");
                mobileMenu.classList.remove("z-50");
            });
        }

        window.addEventListener("resize", function() {
            if (window.innerWidth >= 1024) { // lg breakpoint is 1024px in Tailwind
                overlay.classList.add("hidden");
                mobileMenu.classList.add("hidden");
                navbar.classList.remove("relative", "z-50");
                mobileMenu.classList.remove("z-50");
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const carousel = document.getElementById("default-carousel");
        const items = carousel.querySelectorAll("[data-carousel-item]");
        const dots = document.querySelectorAll(".carousel-dot");
        const totalItems = items.length;
        let currentIndex = 0;
        let interval;

        function updateIndicators(index) {
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.add("bg-red-500", "opacity-100");
                } else {
                    dot.classList.remove("bg-red-500", "opacity-100");
                    dot.classList.add("opacity-50");
                }
            });
        }

        function showSlide(index) {
            items.forEach((item, i) => {
                item.classList.add("hidden");
                item.classList.remove("opacity-100", "scale-100", "duration-900", "ease-in-out");
            });

            items[index].classList.remove("hidden");
            items[index].classList.add("opacity-100", "scale-100", "duration-900", "ease-in-out");

            updateIndicators(index);
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalItems;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            showSlide(currentIndex);
        }

        function startAutoSlide() {
            interval = setInterval(nextSlide, 7000);
        }

        function stopAutoSlide() {
            clearInterval(interval);
        }

        dots.forEach((dot, index) => {
            dot.addEventListener("click", function() {
                stopAutoSlide();
                showSlide(index);
                startAutoSlide();
            });
        });

        // Initialize
        showSlide(currentIndex);
        startAutoSlide();

        const nextButton = carousel.querySelector("[data-carousel-next]");
        const prevButton = carousel.querySelector("[data-carousel-prev]");

        if (nextButton && prevButton) {
            nextButton.addEventListener("click", function() {
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            });

            prevButton.addEventListener("click", function() {
                stopAutoSlide();
                prevSlide();
                startAutoSlide();
            });
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        const searchBar = document.getElementById("search-bar");
        const searchIcon = document.getElementById("search-icon");
        const closeSearch = document.getElementById("close-search");
        const navbar = document.querySelector("nav");

        if (searchIcon && searchBar && closeSearch && navbar) {
            // Open search bar with animation
            searchIcon.addEventListener("click", function(event) {
                event.stopPropagation();

                // Ensure display is set properly before animation
                searchBar.style.display = "block";
                setTimeout(() => {
                    searchBar.classList.remove("hidden");
                    searchBar.classList.add("opacity-100", "translate-y-0");
                    searchBar.classList.remove("opacity-0", "-translate-y-full");
                    navbar.classList.add("mt-16"); // Moves navbar down
                }, 10);
            });

            // Close search bar with animation
            closeSearch.addEventListener("click", function(event) {
                event.stopPropagation();

                // Apply animation to hide the search bar
                searchBar.classList.add("opacity-0", "-translate-y-full");
                searchBar.classList.remove("opacity-100", "translate-y-0");

                // Delay hiding element completely to allow animation to finish
                setTimeout(() => {
                    searchBar.classList.add("hidden");
                    searchBar.style.display = "none"; // Reset display to prevent second-click issue
                    navbar.classList.remove("mt-16"); // Restore navbar position
                }, 500);
            });

            searchBar.addEventListener("click", function(event) {
                event.stopPropagation();
            });
        } else {
            console.error("Search icon or search bar not found.");
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        const academicsToggle = document.getElementById("academics-toggle");
        const academicsSubmenuMobile = document.getElementById("academics-submenu-mobile");

        function toggleDropdown() {
            if (academicsSubmenuMobile.classList.contains("hidden")) {
                academicsSubmenuMobile.classList.remove("hidden", "opacity-0", "scale-95");
                academicsSubmenuMobile.classList.add("opacity-100", "scale-100", "block");
            } else {
                academicsSubmenuMobile.classList.add("hidden", "opacity-0", "scale-95");
                academicsSubmenuMobile.classList.remove("opacity-100", "scale-100", "block");
            }
        }

        function handleScreenSize() {
            const isLargeScreen = window.innerWidth >= 1536; // Tailwind's 2xl breakpoint

            if (!isLargeScreen) {
                // Enable Click Behavior for Small Screens
                academicsToggle.addEventListener("click", toggleDropdown);
            } else {
                // Disable Click Behavior for Large Screens
                academicsToggle.removeEventListener("click", toggleDropdown);
            }
        }

        // Run on page load and on resize
        handleScreenSize();
        window.addEventListener("resize", handleScreenSize);
    });

    document.addEventListener("DOMContentLoaded", function() {
        const peopleToggle = document.getElementById("people-toggle");
        const peopleSubmenuMobile = document.getElementById("people-submenu-mobile");

        function toggleDropdown() {
            if (peopleSubmenuMobile.classList.contains("hidden")) {
                peopleSubmenuMobile.classList.remove("hidden", "opacity-0", "scale-95");
                peopleSubmenuMobile.classList.add("opacity-100", "scale-100", "block");
            } else {
                peopleSubmenuMobile.classList.add("hidden", "opacity-0", "scale-95");
                peopleSubmenuMobile.classList.remove("opacity-100", "scale-100", "block");
            }
        }

        function handleScreenSize() {
            const isLargeScreen = window.innerWidth >= 1536; // Tailwind's 2xl breakpoint

            if (!isLargeScreen) {
                // Enable Click Behavior for Small Screens
                peopleToggle.addEventListener("click", toggleDropdown);
            } else {
                // Disable Click Behavior for Large Screens
                peopleToggle.removeEventListener("click", toggleDropdown);
            }
        }

        // Run on page load and on resize
        handleScreenSize();
        window.addEventListener("resize", handleScreenSize);
    });
</script>

</html>