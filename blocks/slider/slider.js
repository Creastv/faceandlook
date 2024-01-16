var swiper = new Swiper(".js-home-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 5500,
      disableOnInteraction: false
    },
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
    on: {
      //   init: function () {
      //     var activeSlide = document.getElementsByClassName("swiper-slide")[0];
      //     var activeSlideVideo = activeSlide.getElementsByTagName("video")[0];
      //     activeSlideVideo.play();
      //   },

      transitionStart: function () {
        var videos = document.querySelectorAll("video");
        Array.prototype.forEach.call(videos, function (video) {
          video.pause();
        });
      },

      transitionEnd: function () {
        var activeIndex = this.activeIndex;
        var activeSlide = document.getElementsByClassName("swiper-slide")[activeIndex];
        var activeSlideVideo = activeSlide.getElementsByTagName("video")[0];
        // activeSlideVideo.currentTime(0);
        if (activeSlideVideo){
        activeSlideVideo.play();
        }
      }
    }
  });
  