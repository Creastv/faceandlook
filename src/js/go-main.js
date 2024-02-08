
// HEader fixed

const togglerNav = document.querySelector(".js-navbar__toggler");
const nav = document.querySelector(".js-navbar__navigation");
let navFlag = false;

togglerNav.addEventListener("click", () => {
  if (navFlag == false) {
    nav.classList.add("active");
    togglerNav.classList.add("active");
    // document.querySelector("body").style.overflow = "hidden";
    navFlag = true;
  } else {
    nav.classList.remove("active");
    togglerNav.classList.remove("active");
    // document.querySelector("body").style.overflow = "inherit";
    navFlag = false;
  }
});

// sticy nabvbar
const navbar = document.querySelector(".js-navbar");
document.addEventListener("scroll", () => {
  var st = window.pageYOffset || document.documentElement.scrollTop;
  if (window.pageYOffset) {
    navbar.classList.add("active");
    document.querySelector("#header").style.paddingTop = navbar.clientHeight + "px";
  } else {
    navbar.classList.remove("active");
    document.querySelector("#header").style.paddingTop = "0";
  }
});

  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }
  });

setTimeout(
 function() {
    //get the images
    let images = document.querySelectorAll("img"); 
     
    //loop through all images
    for (let i = 0; i < images.length; i++) {
        //add alt text if missing (but title is present)
        if (!images[i].alt) {
            images[i].alt = 'test';
		 images[i].setAttribute('alt', 'Face&Look');
        }
    }
}, 1000);


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


//funkcja ktora przykleja navbar__wc-nav do gory strony przy skrolowaniu w górę
const navbarSec = document.querySelector(".navbar__wc-nav");


// Hide navbar__wc-nav when scrolling down
let prevScrollPos = window.pageYOffset;
window.addEventListener("scroll", () => {
  const navbarElement = document.querySelector(".js-navbar");
const navbarHeight = navbarElement.offsetHeight;
  const currentScrollPos = window.pageYOffset;
  // Check if the page is at the top

  if (prevScrollPos > currentScrollPos) {
    navbarSec.style.position = 'fixed';
    navbarSec.style.zIndex = '98';
    navbarSec.style.top = `${navbarHeight}px`;
    console.log(navbarHeight);
  } else {
    console.log("scrolling down");
    navbarSec.style.position = 'relative';
    navbarSec.style.top = `0px`;

  }
  prevScrollPos = currentScrollPos;

  if (window.pageYOffset === 0) {
    navbarSec.style.position = 'relative';
    navbarSec.style.transition = 'none';
    navbarSec.style.top = `0px`;
  } else {
    navbarSec.style.transition = 'top 0.6s';  
  }
});
