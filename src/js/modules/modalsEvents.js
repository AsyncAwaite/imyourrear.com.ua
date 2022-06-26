import { modal } from "./elements";
import { header } from "./elements";
const headerNav = header.querySelector(".header__nav");
import Form from "./Forms";
const content =  {

  titleDonate: {
    en: 'You can choose an account and pay in any bank. Every contribution is important!',
    ua: 'Ви можете обрати рахунок та сплатити в будь-якому банку. Кожен внесок важливий!'
  },
  descrDonate: {
    en: 'Please choose the one that is most convenient for you',
    ua: 'Оберіть будь ласка той, який вам зручніше'
  },


  organization: {
    en: 'CO "I will be your Rear"',
ua: 'БФ “Я буду твоїм тилом” БО'
  },
  bin: {
    en: 'BIN',
ua: 'МФО'
  },

  code: {
    en: 'Enterprise code',
    ua: 'ЄДРПОУ'
  }
}
export default function modalsEvents(target) {
  const modalForm = document.createElement("div");
  modalForm.classList = "modal__form";

const{titleDonate,  organization, bin, code} = content;
const isEn = location.pathname.indexOf('/en/') !== -1;



  if (target.hasAttribute("data-donate")) {
    modalForm.innerHTML = `


  <h2 class="fz-36 f-600">
  ${!isEn ?titleDonate.ua : titleDonate.en}
  </h2>
  <div class="d-flex payment">
    <div class="payment__info">
<div class="fz-20">  ${!isEn ?organization.ua : organization.en}</div>
<div class="fz-20"> ${!isEn ?code.ua : code.en} 44757373</div>
<div class="fz-20">${!isEn ?bin.ua : bin.en} 305299</div>
    </div>
    <div class="payment__number">
      <div class="form__item d-flex">
        <input type="text" readonly value="UAH" class="bd-yellow">
        <input type="text" readonly value="UA153052990000026006015026485" class="bd-blue ">
      </div>  
      <div class="form__item d-flex">
        <input type="text" readonly value="USD" class="bd-yellow">
        <input type="text" readonly value="UA563052990000026001045028793" class="bd-blue ">
      </div>
      <div class="form__item d-flex">
        <input type="text" readonly value="EUR" class="bd-yellow">
        <input type="text" readonly value="UA103052990000026004045032623" class="bd-blue ">
      </div>
    </div>
  </div>
    
  
        
          `;
   
    modal.querySelector(".modal__body").appendChild(modalForm);
  }



}
