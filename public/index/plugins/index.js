// слайдер
var slider = new Swiper(".mySwiper", {
  autoplay:{
    delay:5000,
  },
  loop:{
    loop:true,
  },
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  mousewheel: true,
  // keyboard: true,
});
// слайдер
var slider1 = new Swiper(".mySwiper1", {
  autoplay:{
    delay:5000,
  },
  loop:{
    loop:true,
  },
  slidesPerGroup:1,
  slidesPerView:3,

  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  mousewheel: true,
});