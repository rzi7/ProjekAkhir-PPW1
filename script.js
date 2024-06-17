// Custom JavaScript for Parallax Effect
document.addEventListener("DOMContentLoaded", function () {
  const rellaxElements = document.querySelectorAll("[data-rellax-percentage]");

  function updateParallax() {
    rellaxElements.forEach((element) => {
      const percentage = parseFloat(
        element.getAttribute("data-rellax-percentage")
      );
      const scrollPosition = window.scrollY;
      const elementPosition = element.offsetTop;
      const windowHeight = window.innerHeight;

      // Calculate the offset based on scroll position
      const offset =
        ((scrollPosition - elementPosition + windowHeight) * percentage);

      // Apply the parallax effect
      element.style.transform = `translateY(${offset}px)`;
    });
  }

  // Update parallax effect on scroll and initial load
  window.addEventListener("scroll", updateParallax);
  window.addEventListener("resize", updateParallax);
  updateParallax();
});

// document.addEventListener("DOMContentLoaded", function () {
//   const rekomenFoto = document.querySelectorAll(".teks-rekomen");

//   rekomenFoto.forEach(function (foto) {
//     foto.addEventListener("mouseover", function () {
//       foto.style.cursor = "pointer";
//       foto.querySelector("h3").style.color = "white";
//       foto.querySelector("h3").style.transition = "ease-in-out .4s";
//       foto.querySelector("p").style.color = "white";
//       foto.querySelector("img").style.filter = "brightness(70%)";
//       foto.querySelector("img").style.transition = "ease-in-out .4s";
//       foto.querySelector("p").style.transition = "ease-in-out .4s";
//       // foto.style.transition = "ease-in-out .9s";
//     });

//     foto.addEventListener("mouseout", function () {
//       foto.querySelector("img").style.filter = "brightness(100%)";
//       foto.querySelector("h3").style.color = "black";
//       foto.querySelector("p").style.color = "black";
//       // foto.style.transition = "out .3s";
//     });
//   });
// });

document.addEventListener("DOMContentLoaded", function () {
  const rekomenFoto = document.querySelectorAll(".teks-rekomen");

  function showElementsSequentially(elements, interval) {
    let index = 0;

    function showNextElement() {
      if (index < elements.length) {
        elements[index].style.opacity = "1"; // Show the element
        index++;
        setTimeout(showNextElement, interval); // Call the function again after the interval
      } else {
        index = 0;
        setTimeout(hideElementsSequentially, interval); // Reset and hide elements after a full cycle
      }
    }

    function hideElementsSequentially() {
      elements.forEach((element) => {
        element.style.opacity = "0"; // Hide all elements
      });
      setTimeout(showNextElement, interval); // Start showing elements again
    }

    showNextElement();
  }

  // Function to initialize the staggered animation only for specific screen sizes
  function initializeStaggeredAnimation() {
    const mediaQuery = window.matchMedia("(max-width: 896px)"); // Change this as needed
    if (mediaQuery.matches) {
      showElementsSequentially(rekomenFoto, 2000); // 2000 ms interval for each element
    }
  }

  // Initialize animation on page load
  initializeStaggeredAnimation();

  // Add listener to handle screen size changes
  window.addEventListener("resize", initializeStaggeredAnimation);

  rekomenFoto.forEach(function (foto) {
    foto.addEventListener("mouseover", function () {
      foto.style.cursor = "pointer";
      foto.querySelector("h3").style.color = "white";
      foto.querySelector("h3").style.transition = "ease-in-out .4s";
      foto.querySelector("p").style.color = "white";
      foto.querySelector("img").style.filter = "brightness(70%)";
      foto.querySelector("img").style.transition = "ease-in-out .4s";
      foto.querySelector("p").style.transition = "ease-in-out .4s";
    });

    foto.addEventListener("mouseout", function () {
      foto.querySelector("img").style.filter = "brightness(100%)";
      foto.querySelector("h3").style.color = "black";
      foto.querySelector("p").style.color = "black";
    });
  });
});

