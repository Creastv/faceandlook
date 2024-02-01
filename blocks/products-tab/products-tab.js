


setTimeout(  function() {
    document.querySelector('.tabs').style.display = 'block';
    var swiper = new Swiper(".new-slider", {
    slidesPerView: 2,
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination',
    },
    
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

   
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
  
        },
        768: {
            slidesPerView: 2,
     
        },
        1200: {
            slidesPerView: 4,
          
        },
        1400: {
            slidesPerView: 5,
          
        }
    }
});



}, 1000);

function tabs(evt, tabs) {
    evt.preventDefault();
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].classList.remove('active');
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabs).classList.add('active');
    evt.currentTarget.className += " active";
}