// HAMBURGER MENU ANIMATIONS TOGGLE & SHOW NAV
const hamburger = document.querySelector(".hamburger");
// const hamburgerBox = document.querySelector('.hamburger-box');
const mainMenu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".menu-item");

hamburger.addEventListener("click", function() {
  this.classList.toggle("active");
  this.classList.toggle("not-active");
  // hamburgerBox.classList.toggle('active');
  mainMenu.classList.toggle("show-nav");
  // navItems.forEach(item => item.classList.toggle('show-nav'));
});

// MAP
var map = L.map("map").setView([44.834733, 20.40557], 17);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([44.834733, 20.40557])
  .addTo(map)
  .bindPopup("Ordinacija Lilo<br> Luja Adamiča 26d")
  .openPopup();
