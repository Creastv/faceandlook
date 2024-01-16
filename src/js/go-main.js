const megamenuOpener = document.querySelector('.navbar__toggler');
const megamenu = document.querySelector('.mega-menu');
const body = document.querySelector('body');
const header = document.querySelector('#header');

const accessibilityOpener = document.querySelector('.accessibility-opener');
const accessibility = document.querySelector('.navbar__accessibility__wrap');
const search = document.querySelector('.navbar__search__slider');
const searchOpener = document.querySelector('.search-opener');
const closeAccessibility = document.querySelector('.navbar__accessibility .close');
const contrast = document.querySelector('.navbar__accessibility__wrap .contrast');
const incFonts = document.querySelector('.inc-font');
const desFonts = document.querySelector('.des-font');
let flagContrast = null;
let sizeFonts = 100;


// Search
searchOpener.addEventListener('click', function(event){
    event.preventDefault();
    search.classList.toggle('active');
    accessibility.classList.remove('active');
});

// Accessibilit
accessibilityOpener.addEventListener('click', function(event){
    event.preventDefault();
    accessibility.classList.toggle('active');
    search.classList.remove('active');
});
closeAccessibility .addEventListener('click', function(event){
    event.preventDefault();
    accessibility.classList.remove('active');
    if(localStorage.getItem("high-contrast") == 'on'){
        localStorage.removeItem("high-contrast");
        document.querySelector('body').classList.remove('contrast-high');
    }
})
// inc
incFonts.addEventListener('click', function(event){
    event.preventDefault();
    disabledFontSize();
    if (sizeFonts <= 125) {
        sizeFonts += 25;
        document.querySelector('body').style.fontSize = sizeFonts + "%";
        localStorage.setItem("font", sizeFonts);
    }
});
// des
desFonts.addEventListener('click', function(event){
    event.preventDefault();
    disabledFontSize();
    if (sizeFonts >= 75 ) {
        sizeFonts -= 25;
        document.querySelector('body').style.fontSize = sizeFonts + "%";
        localStorage.setItem("font", sizeFonts);
    }
    
});
function disabledFontSize(){
   if( sizeFonts == 50  ) {
        desFonts.style.opacity = '0.3';
        incFonts.style.opacity = '1';
    } else if(sizeFonts == 150) {
        desFonts.style.opacity = '1';
        incFonts.style.opacity = '0.3';
    } else {
        desFonts.style.opacity = '1';
        incFonts.style.opacity = '1';
    }
}
// console.log(localStorage.getItem("font"));
if (localStorage.getItem("font", sizeFonts )) {
    document.querySelector('body').style.fontSize = localStorage.getItem("font") + "%"
} 

// Contrast
contrast.addEventListener('click', function(event){
    event.preventDefault();
    document.querySelector('body').classList.toggle('contrast-high');
    if((localStorage.getItem("high-contrast", 'on' ) == 'on') ){
        localStorage.removeItem("high-contrast");
    } else {
        localStorage.setItem("high-contrast", "on");
    }
    accessibility.classList.remove('active');
});

if (localStorage.getItem("high-contrast", 'on' ) == 'on') {
    document.querySelector('body').classList.add('contrast-high')
} 

// Mega menu


megamenuOpener.addEventListener('click', function(event){
    event.preventDefault();
    megamenu.classList.toggle('active');
    megamenuOpener.classList.toggle('active');
    body.classList.toggle('scroll-off');
    accessibility.classList.remove('active');
    search.classList.remove('active');
});


// HEader fixed

// 
document.addEventListener("scroll", () => {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (window.pageYOffset) {
      header.classList.add("active");
      body.style.marginTop = header.offsetHeight + 'px';
    } else {
      header.classList.remove("active");
      body.style.marginTop = '0px';
    }
  });

// go to top

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
		 images[i].setAttribute('alt', 'Bemowskie Centrum kultury');
        }
    }
}, 1000);