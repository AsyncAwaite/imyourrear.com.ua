import Swiper from "swiper";
import SwiperCore, { Navigation, Autoplay } from "swiper/core";
SwiperCore.use([Navigation, Autoplay]);

const sliders = () => {
  const swiperAbout = new Swiper(".swiper-about", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,


    runCallbacksOnInit:true,
    navigation: {
          nextEl: ".swiper-about__next",
          prevEl: ".swiper-about__prev",
        },

        on: {
          slideChange: function(){
            var currentSlide = this.realIndex + 1;
            document.querySelector('.counter__current').innerHTML = `0${currentSlide}`;
          },
          beforeInit: function(){
          let numOfSlides = this.wrapperEl.querySelectorAll(".swiper-slide").length;
          document.querySelector('.counter__total').innerHTML = `0${numOfSlides}`;
          }
        }
  // });
  });
//   const swiperReport = new Swiper(".swiper-report", {
//     slidesPerView: 1,
//     spaceBetween: 20,
//  loop: true,


//     navigation: {
//           nextEl: ".swiper-report__next",
//           prevEl: ".swiper-report__prev",
//         },
//   });
};

export default sliders;
