"use strict";
import adaptiveElements from "./modules/adaptiveElements";
import { page } from "./modules/elements";
import scrollToAnchor from "./modules/scrollToAnchor";
import sliders from "./modules/sliders";
import modalsEvents from "./modules/modalsEvents";
import Form from "./modules/Forms";

import Modal from "./modules/popups";
window.addEventListener("DOMContentLoaded", () => {
  adaptiveElements();
  // scrollToAnchor();
  sliders();
  headerFixed();
  window.addEventListener("scroll", () => {
    headerFixed();
  });
  // new Form(".form").init();
  const btns = document.querySelectorAll("[data-donate]");
  btns.forEach((btn) => {
    btn.addEventListener("click", function () {
      modalsEvents(this);
        new Modal(".modal").openModal();
    
    });
  });
  function headerFixed() {
    const header = page.querySelector(".header");
    if (matchMedia("(max-width: 576px)").matches) {
      if (window.pageYOffset > 30) {
        header.classList.add("header_fixed");
      } else {
        header.classList.remove("header_fixed");
      }
    } else {
      if (window.pageYOffset > 80) {
        header.classList.add("header_fixed");
      } else {
        header.classList.remove("header_fixed");
      }
    }
  }
  window.addEventListener("orientationchange", function() {

    if(screen.height < document.querySelector(".modal__body").offsetHeight){
      modalBody.style.height = '100%'
      modalBody.style.overflow = 'scroll';
    } else {
      modalBody.style.height = 'auto';
      modalBody.style.overflow = 'auto';
    }
  }, false);
});
