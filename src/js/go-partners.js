var swiper = new Swiper(".partnerz", {
    slidesPerView: 3,
    spaceBetween: 30,
  //  loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false
    },
    breakpoints: {
      640: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      1024: {
        slidesPerView: 6,
        spaceBetween: 30
      }
    }
  });
  