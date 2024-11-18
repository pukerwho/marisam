// Open mobile menu
let menuToggleOpen = document.querySelector(".menu-open-js");
let menuToggleClose = document.querySelector(".menu-close-js");
let mobileMenu = document.querySelector(".mobile-menu");
if (menuToggleOpen) {
  menuToggleOpen.addEventListener("click", () => {
    document.body.classList.add("overflow-hidden");
    mobileMenu.classList.remove("hidden");
  });
}
if (menuToggleClose) {
  menuToggleClose.addEventListener("click", () => {
    document.body.classList.remove("overflow-hidden");
    mobileMenu.classList.add("hidden");
  });
}