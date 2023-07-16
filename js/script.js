/*=============================
Main - Dropdown Toggler
=====================*/

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
      var activeDropdowns = document.querySelectorAll(
        ".nav-list > li.dropdown.active"
      );
      for (var j = 0; j < activeDropdowns.length; j++) {
        activeDropdowns[j].classList.remove("active");
      }
      dropdown.classList.add("active");
    }
    event.preventDefault();
  });
}

/*=============================
Sub - Dropdown Toggler
=====================*/

var dropdownSubmenuToggle = document.querySelectorAll(
  ".drop-mega:first-child > .dropdown-menu > li > a"
);
for (var i = 0; i < dropdownSubmenuToggle.length; i++) {
  dropdownSubmenuToggle[i].addEventListener("click", function (event) {
    var dropdownSubmenu = this.parentNode;
    if (dropdownSubmenu.classList.contains("level-active")) {
      dropdownSubmenu.classList.remove("level-active");
    } else {
      var activeDropdownSubmenus = document.querySelectorAll(
        ".drop-mega:first-child > .dropdown-menu > li.level-active"
      );
      for (var j = 0; j < activeDropdownSubmenus.length; j++) {
        activeDropdownSubmenus[j].classList.remove("level-active");
      }
      dropdownSubmenu.classList.add("level-active");
    }
    event.preventDefault();
  });
}
var dropdownSubmenuToggle2 = document.querySelectorAll(
  ".drop-mega:nth-child(4) > .dropdown-menu > li > a"
);
for (var i = 0; i < dropdownSubmenuToggle2.length; i++) {
  dropdownSubmenuToggle2[i].addEventListener("click", function (event) {
    var dropdownSubmenu = this.parentNode;
    if (dropdownSubmenu.classList.contains("level-active")) {
      dropdownSubmenu.classList.remove("level-active");
    } else {
      var activeDropdownSubmenus = document.querySelectorAll(
        ".drop-mega:nth-child(4) > .dropdown-menu > li.level-active"
      );
      for (var j = 0; j < activeDropdownSubmenus.length; j++) {
        activeDropdownSubmenus[j].classList.remove("level-active");
      }
      dropdownSubmenu.classList.add("level-active");
    }
    event.preventDefault();
  });
}


var parentList = document.getElementById('parent_drop');
var firstChild = parentList.querySelector('li:first-child');
firstChild.classList.add('level-active');


/*=============================
Mobile - Dropdown Toggler
=====================*/

const navbarToggle = document.querySelector(".navbar-toggle");
const bars = document.querySelector(".fa-bars");
const navbar = document.querySelector(".my-navbar");

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

/*=============================
Search Bar Toggler
=====================*/
const searchIcon = document.querySelector(".fa-magnifying-glass");
const searchButton = document.querySelector(".search-toggler");
const searchContainer = document.querySelector(".input-box");

// Toggle the search bar when the button is clicked
searchButton.addEventListener("click", function () {
  searchContainer.classList.toggle("hidden-search-bar");
  searchButton.classList.toggle("active");
  searchIcon.classList.toggle("fa-xmark");

  searchBar.focus();
});

// Close the search bar when the user clicks outside
document.addEventListener("click", function (event) {
  const isClickInside =
    searchContainer.contains(event.target) ||
    searchButton.contains(event.target);
  if (!isClickInside) {
    searchIcon.classList.remove("fa-xmark");
    searchIcon.classList.add("fa-magnifying-glass");
    searchButton.classList.remove("active");

    searchContainer.classList.add("hidden-search-bar");
  }
});

/*=============================
Slider Initializer
=====================*/

new Splide(".splide", {
  type: "fade",
  speed: 1500,
  rewind: true,
  // autoplay: {
  //   delay: 5000,
  // },
  dragMinThreshold: {
    mouse: 400,
    touch: 10,
  },
}).mount();

// $(".collapse").collapse();
// document.addEventListener("DOMContentLoaded", function () {
//   var main = new Splide("#main-carousel", {
//     type: "fade",
//     rewind: true,
//     pagination: false,
//     arrows: false,
//   });

//   var thumbnails = new Splide("#thumbnail-carousel", {
//     fixedWidth: 250,
//     fixedHeight: 150,
//     gap: 10,
//     rewind: true,
//     pagination: false,
//     isNavigation: true,
//     breakpoints: {
//       600: {
//         fixedWidth: 100,
//         fixedHeight: 88,
//       },
//     },
//   });

//   main.sync(thumbnails);
//   main.mount();
//   thumbnails.mount();
// });

/*=============================
Testimonial Slider Initializer
=====================*/

const swiperT = new Swiper(".swiperTest", {
  // Optional parameters
  autoHeight: true,
  loop: true,

  // autoplay: {
  //   delay: 5000,
  // },

  pagination: {
    el: ".swiper-pagination2",
    clickable: true,
  },
  allowTouchMove: false,

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next-y",
    prevEl: ".swiper-button-prev-x",
  },
});

// // let calcScrollValue = () => {
// //   let scrollProgress = document.getElementById("progress");
// //   let progressValue = document.getElementById("progress-value");
// //   let pos = document.documentElement.scrollTop;
// //   let calcHeight =
// //     document.documentElement.scrollHeight -
// //     document.documentElement.clientHeight;
// //   let scrollValue = Math.round((pos * 100) / calcHeight);
// //   if (pos > 100) {
// //     scrollProgress.style.display = "grid";
// //   } else {
// //     scrollProgress.style.display = "none";
// //   }
// //   scrollProgress.addEventListener("click", () => {
// //     document.documentElement.scrollTop = 0;
// //   });
// //   scrollProgress.style.background = `conic-gradient(#034bf1 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
// // };

// // window.onscroll = calcScrollValue;
// // window.onload = calcScrollValue;

// const cookieBox = document.querySelector(".cookie-wrapper"),
//   buttons = document.querySelectorAll(".cookie-button");

// const executeCodes = () => {
//   //if cookie contains codinglab it will be returned and below of this code will not run
//   if (document.cookie.includes("Shikhar Adventure")) return;
//   cookieBox.classList.add("show");

//   buttons.forEach((button) => {
//     button.addEventListener("click", () => {
//       cookieBox.classList.remove("show");

//       //if button has acceptBtn id
//       if (button.id == "acceptBtn") {
//         //set cookies for 1 month. 60 = 1 min, 60 = 1 hours, 24 = 1 day, 30 = 30 days
//         document.cookie =
//           "cookieBy=Shikhar Adventure; max-age=" + 60 * 60 * 24 * 30;
//       }
//     });
//   });
// };

// //executeCodes function will be called on webpage load
// window.addEventListener("load", executeCodes);

$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    navText: [
      "<a class='btn prev-caro'><i class='fa fa-angle-left' aria-hidden='true'></i></a>",
      "<a class='btn next-caro'><i class='fa fa-angle-right' aria-hidden='true'></i></a>",
    ],

    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      769: {
        items: 2,
        nav: true,
      },
      1200: {
        items: 3,
        nav: true,
        loop: true,
        margin: 10,
      },
    },
  });
});

// window.addEventListener("scroll", function () {
//   let StickyNav = document.getElementById("mySticky");
//   let priceStick = document.getElementById("price-cta");

//   if (this.window.scrollY >= 867.3) {
//     console.log("Hello");
//     StickyNav.classList.add("sticky");
//   } else {
//     StickyNav.classList.remove("sticky");
//   }

//   if (this.window.scrollY >= 1030) {
//     console.log("Hello");
//     priceStick.classList.add("sticky");
//   } else {
//     priceStick.classList.remove("sticky");
//   }
// });
