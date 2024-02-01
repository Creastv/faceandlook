var swiper = new Swiper(".js-home-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    // autoplay: {
    //   delay: 5500,
    //   disableOnInteraction: false
    // },
    pagination: {
      el: ".swiper-pagination--slider",
      clickable: true,
    },
    grabCursor: true,
    effect: "creative",
    creativeEffect: {
      prev: {
        shadow: true,
        translate: [0, 0, -400],
      },
      next: {
        translate: ["100%", 0, 0],
      },
    },
    
  });
  