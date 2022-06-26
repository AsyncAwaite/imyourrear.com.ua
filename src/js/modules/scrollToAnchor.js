import { header } from "./elements";
const headerNav = header.querySelector(".header__nav");
const scrollToAnchor = function () {
  const links = document.querySelectorAll(".scrolTo");

  links.forEach((link) => {
 
    link.addEventListener("click", function (event) {
      event.preventDefault();
      const blockID = link.getAttribute("href");
     
      const headerHeaight = header.offsetHeight;
      if (document.querySelector(".burger") && document.querySelector(".burger").classList.contains("active")) {
        document.querySelector(".burger").classList.toggle("active");
        headerNav.classList.toggle("active");
        document.body.classList.toggle("active");
      }
      
      window.scrollTo({
        top: document.querySelector(`${blockID}`).offsetTop - headerHeaight,
        behavior: "smooth",
      });
    });
  });
};
export default scrollToAnchor;
