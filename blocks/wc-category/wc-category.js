var swiper = new Swiper(".wc-cats", {
    slidesPerView: 3,
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false
    },
  
    breakpoints: {
      500: {
        slidesPerView: 4,
        spaceBetween: 30
      },
      900: {
        slidesPerView: 5,
        spaceBetween: 30
      },
      1300: {
        slidesPerView: 6,
        spaceBetween: 30
      }
    }
  });