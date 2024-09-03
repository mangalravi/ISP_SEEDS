$(document).ready(function () {
  $(".loop").owlCarousel({
    center: true,
    items: 2,
    loop: true,
    margin: 20,
    dots: true,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: true,
    smartSpeed: 800,
    responsive: {
      0: {
        items: 1,
      },
      575: {
        items: 2,
      },
      767: {
        items: 3,
      },
      991: {
        items: 4,
      },

      1440: {
        items: 5,
      },
      // 1900: {
      //   items: 6,
      // },
    },
  });

  $(".testimonialcara").owlCarousel({
    center: true,
    items: 1,
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    smartSpeed: 800,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1200: {
        items: 1,
      },
    },
  });
});

// AOS.init({ disable: "mobile" });
AOS.init();

function initializeAOS() {
  if (window.innerWidth > 767) {
    // Adjust the width as per your needs
    AOS.init({
      disable: false,
    });
  } else {
    AOS.init({
      disable: true,
    });
  }
}

// Initialize AOS on page load
initializeAOS();

// Reinitialize AOS on window resize
window.addEventListener("resize", function () {
  initializeAOS();
});

document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth < 991) {
    const parentMenus = document.querySelectorAll(".parent-menu");

    parentMenus.forEach((menu) => {
      const navLink = menu.querySelector(".nav-link");

      // Add click event listener to the nav-link of the parent-menu
      navLink.addEventListener("click", function (event) {
        // Prevent default link behavior
        event.preventDefault();

        // Close other open menus
        parentMenus.forEach((otherMenu) => {
          if (otherMenu !== menu) {
            otherMenu.classList.remove("active");
          }
        });

        // Toggle the clicked menu
        menu.classList.toggle("active");
      });

      // Add click event listener to submenu items to prevent bubbling
      const submenuItems = menu.querySelectorAll(".submenu a");
      submenuItems.forEach((submenuItem) => {
        submenuItem.addEventListener("click", function (event) {
          // Prevent click event from bubbling up to parent-menu
          event.stopPropagation();
        });
      });
    });
  }
});

// Optionally handle window resizing
window.addEventListener("resize", function () {
  if (window.innerWidth >= 991) {
    // Remove active class when resizing back to larger screens
    document.querySelectorAll(".parent-menu").forEach((menu) => {
      menu.classList.remove("active");
    });
  }
});

$(".accordion-collapse").on("shown.bs.collapse", function (e) {
  var $panel = $(this).closest(".accordion-item");

  // Check if the clicked accordion item is already in view
  var isInViewport = function (element) {
    var rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  };

  // Define the offset from the top (e.g., 70px)
  var offsetFromTop = 80;

  // Only scroll if the accordion item is not in viewport
  if (!isInViewport($panel[0])) {
    $("html, body").animate(
      {
        scrollTop: $panel.offset().top - offsetFromTop,
      },
      500
    );
  }
});

$(document).ready(function () {
  $(".accordion-body p").each(function () {
    if ($(this).find("strong").length > 0) {
      // If the paragraph contains a <strong> tag
      $(this).css("margin-bottom", "0");
    } else {
      // If the paragraph does not contain a <strong> tag
      $(this).css("margin-bottom", "0.75rem");
    }
  });
});

function adjustAspectRatio() {
  var iframe = document.getElementById("youtube-video");
  if (iframe) {
    // Check if iframe is found
    var aspectRatio = 16 / 9;
    var width = iframe.offsetWidth;
    var height = width / aspectRatio;
    iframe.style.height = height + "px";
  }
}

// Only add event listeners if the iframe exists
function setupEventListeners() {
  var iframe = document.getElementById("youtube-video");
  if (iframe) {
    window.addEventListener("resize", adjustAspectRatio);
    document.addEventListener("DOMContentLoaded", adjustAspectRatio);
  }
}

// Run the setup function to attach event listeners
setupEventListeners();

document.addEventListener("DOMContentLoaded", function () {
  // Function to animate the counter
  function animateCounter(counter) {
    const target = +counter.getAttribute("data-target");
    let count = 0;
    const speed = 200; // Adjust the speed of the count up

    const updateCounter = () => {
      const increment = target / speed;
      count += increment;

      if (count < target) {
        counter.textContent = Math.ceil(count).toLocaleString(); // Format with commas
        requestAnimationFrame(updateCounter);
      } else {
        counter.textContent = target.toLocaleString(); // Ensure exact number at the end
      }
    };

    updateCounter();
  }

  // Intersection Observer callback
  function handleIntersect(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const counters = entry.target.querySelectorAll(".counter");
        counters.forEach((counter) => {
          if (!counter.classList.contains("animated")) {
            animateCounter(counter);
            counter.classList.add("animated");
          }
        });
        observer.unobserve(entry.target); // Stop observing after animation
      }
    });
  }

  // Create an Intersection Observer instance
  const observer = new IntersectionObserver(handleIntersect, {
    threshold: 0.5,
  });

  // Observe each section containing counters
  document.querySelectorAll(".mnof").forEach((section) => {
    observer.observe(section);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const togglerButton = document.querySelector(".navbar-toggler");
  const togglerIcon = document.querySelector(".navbar-toggler-icon");

  togglerButton.addEventListener("click", function () {
    togglerIcon.classList.toggle("toggled");
  });
});
