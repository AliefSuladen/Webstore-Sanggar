window.addEventListener("scroll", function () {
  var nav = document.querySelector("nav");
  nav.classList.toggle("sticky", window.scrollY > 0);
});

const menuToggle = document.querySelector(".menu-toggle input");
const nav = document.querySelector("nav ul");

menuToggle.addEventListener("click", function () {
  nav.classList.toggle("slide");
});
