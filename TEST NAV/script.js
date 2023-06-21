document.addEventListener("click", function (event) {
  var dropdowns = document.querySelectorAll(".nav-list > li.dropdown.active");
  for (var i = 0; i < dropdowns.length; i++) {
    if (!dropdowns[i].contains(event.target)) {
      dropdowns[i].classList.remove("active");
    }
  }
});

var dropdownToggle = document.querySelectorAll(".nav-list > li.dropdown > a");
for (var i = 0; i < dropdownToggle.length; i++) {
  dropdownToggle[i].addEventListener("click", function (event) {
    var dropdown = this.parentNode;
    if (dropdown.classList.contains("active")) {
      dropdown.classList.remove("active");
    } else {
      var activeDropdowns = document.querySelectorAll(".nav-list > li.dropdown.active");
      for (var j = 0; j < activeDropdowns.length; j++) {
        activeDropdowns[j].classList.remove("active");
      }
      dropdown.classList.add("active");
    }
    event.preventDefault();
  });
}

var dropdownSubmenuToggle = document.querySelectorAll(
  ".drop-mega > .dropdown-menu > li > a"
);
for (var i = 0; i < dropdownSubmenuToggle.length; i++) {
  dropdownSubmenuToggle[i].addEventListener("click", function (event) {
    var dropdownSubmenu = this.parentNode;
    if (dropdownSubmenu.classList.contains("level-active")) {
      dropdownSubmenu.classList.remove("level-active");
    } else {
      var activeDropdownSubmenus = document.querySelectorAll(
        ".drop-mega > .dropdown-menu > li.level-active"
      );
      for (var j = 0; j < activeDropdownSubmenus.length; j++) {
        activeDropdownSubmenus[j].classList.remove("level-active");
      }
      dropdownSubmenu.classList.add("level-active");
    }
    event.preventDefault();
  });
}

const navbarToggle = document.querySelector(".navbar-toggle");
const bars = document.querySelector(".fa-bars");
const navbar = document.querySelector("nav");

navbarToggle.addEventListener("click", (e) => {
  e.stopPropagation();
  navbar.classList.toggle("show-navbar");
  navbarToggle.classList.toggle("toggle-color");
  bars.classList.toggle("fa-xmark");
});

document.addEventListener("click", (e) => {
  if (!navbar.contains(e.target)) {
    navbar.classList.remove("show-navbar");
    navbarToggle.classList.remove("toggle-color");
    bars.classList.remove("fa-xmark");
  }
});

// // Get the elements
// const searchIcon = document.querySelector(".fa-magnifying-glass");
// const searchButton = document.getElementById("search-button");
// const searchContainer = document.getElementById("search-container");
// const searchBar = document.getElementById("search-bar");

// // Toggle the search bar when the button is clicked
// searchButton.addEventListener("click", function () {
//   searchContainer.classList.toggle("hidden-search-bar");
//   searchIcon.classList.toggle("fa-xmark");

//   searchBar.focus();
// });

// // Close the search bar when the user clicks outside
// document.addEventListener("click", function (event) {
//   const isClickInside =
//     searchContainer.contains(event.target) ||
//     searchButton.contains(event.target);
//   if (!isClickInside) {
//     searchIcon.classList.remove("fa-xmark");
//     searchIcon.classList.add("fa-magnifying-glass");

//     searchContainer.classList.add("hidden-search-bar");
//   }
// });


