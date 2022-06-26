import { header } from "./elements";
const headerWrapper = header.querySelector(".header-wrapper ");
const adaptiveElements = () => {
  const headerInfo =  header.querySelector('.header__info')
  const headerProjects = header.querySelector(".header__projects");
  const headerContact = header.querySelector(".header__contacts");
  const langSwitcher = header.querySelector(".lang-switcher");
const headerNav = header.querySelector(".header__nav");
  const headerMenu = document.createElement("div");
  headerMenu.classList = "header__menu t-white";
  if (matchMedia("(max-width:768px)").matches) {
    
    const burger = document.createElement("button");
    burger.innerHTML = `
    <span></span>
    `;
    headerInfo.innerHTML = '';
   
 
    burger.classList.add("burger");
    headerInfo.append(langSwitcher);
    headerInfo.append(burger);
    burger.addEventListener("click", function () {
      this.classList.toggle("active");
      headerMenu.classList.toggle("active");
      document.body.classList.toggle("active");
    });   
    header.append(headerMenu);
    headerMenu.append(headerProjects);
    headerMenu.append(headerNav);
    headerMenu.append(headerContact);
  }
};
export default adaptiveElements;
