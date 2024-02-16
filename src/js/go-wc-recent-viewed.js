var swiper = new Swiper(".recent-viewed-slider", {
    slidesPerView: 2,
    spaceBetween: 5,
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
        400: {
            slidesPerView: 2,
            spaceBetween: 20,
  
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
  
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 20,
     
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 20,
          
        },
        1400: {
            slidesPerView: 5,
            spaceBetween: 20,
          
        }
    }
});