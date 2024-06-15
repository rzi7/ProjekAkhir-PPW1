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
        (scrollPosition - elementPosition + windowHeight) * percentage;

      // Apply the parallax effect
      element.style.transform = `translateY(${offset}px)`;
    });
  }

  // Update parallax effect on scroll and initial load
  window.addEventListener("scroll", updateParallax);
  window.addEventListener("resize", updateParallax);
  updateParallax();
});
