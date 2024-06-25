// href to detail plan
document.querySelector(".fill-plan").addEventListener("click", function () {
  window.location.href = "detailPlan.html"; // Ganti 'targetPage.html' dengan URL tujuan Anda
});

document.querySelector(".fill-plan").addEventListener("mouseover", function () {
  document.querySelector("img").style.width = "14%";
  document.querySelector("img").style.transition = "ease-in-out .3s";
  document.querySelector("h3").style.transition = "ease-in-out .3s";
  document.querySelector("img").style.position = "relative";
  document.querySelector("h3").style.fontSize = "38px";
});

document.querySelector(".fill-plan").addEventListener("mouseout", function () {
  document.querySelector("img").style.width = "13%";
  document.querySelector("img").style.transition = "ease-in-out .3s";
  document.querySelector("h3").style.transition = "ease-in-out .3s";
  document.querySelector("img").style.position = "static";
  document.querySelector("h3").style.fontSize = "30px";
});

// end your plan page
