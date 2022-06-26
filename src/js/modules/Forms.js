import IMask from "imask";
import Modal from "./popups";
import { modal } from "./elements";
const content =  {
  field: {
    en: 'This field is required',
    ua: "Поле обов'язкове для заповнення"
  },
  template: {
    en: 'Fill in according to the template',
    ua: "Заповніть відповідно до шаблону"
  },
  send: {
    en: 'Donate',
    ua: 'Відправити'
  },
  name: {
    en: 'Name:',
    ua: `Введіть ім'я` 
  },

  thankTitle: {
    en: 'THANK YOU VERY MUCH FOR YOUR HELP!',
ua: 'ЩИРО ДЯКУЄМО ЗА ДОПОМОГУ!'
  }
  ,
  thankDescr: {
    en: 'You can read our reports below on the website',
ua: 'Ви можете ознайомитися із нашими звітами нижче на сайті'
  },

}
export default class Form {
  constructor(form) {
    this.form = document.querySelector(form);
    this.inputs = this.form.querySelectorAll("input");
    this.isEn = location.pathname === '/en/';
    this.message = {
      loading: `${path}/assets/icons/spinner.svg`,
      failure: {
        en: 'Something went wrong...',
        ua: "Щось пішло не так..."
      }
    };
    this.path = `${path}/assets/services/telegramBot.php`;
    this.formData = {
      title: "Хочу допомогти",
      phone: "",
      name: "",
    };
  }

  validateEmptyField() {
    let {field} = content;
    let isValid = true;
    this.inputs.forEach((input) => {
      if (input.name === "name") {
        if (!input.value.trim()) {
          input.parentNode.classList.add("invalid");
          input.nextElementSibling.innerHTML =
            `${!isEn ? field.ua : field.en}`;

          return (isValid = false);
        } else {
          this.valid(input);
          input.nextElementSibling.innerText = "";
          return (isValid = true);
        }
      } else {
        if (input.value.indexOf("_") === -1) {
          this.valid(input);
          input.nextElementSibling.innerText = "";
          return (isValid = true);
        } else {
          input.parentNode.classList.add("invalid");
          input.nextElementSibling.innerHTML =
          `${!this.isEn ? field.ua : field.en}`;

          return (isValid = false);
        }
      }
    });
    return isValid;
  }
  valid(input) {
    input.parentNode.classList.add("valid");
    input.parentNode.classList.remove("invalid");
  }
  invalid(input) {
    input.parentNode.classList.add("invalid");
    input.parentNode.classList.remove("valid");
  }
  createMask(input) {
    let maskOptions = {
      mask: "+38 (000) 000 - 00 - 00",
      lazy: false,
    };
    let mask = new IMask(input, maskOptions);
  }

  checkInputs() {
    this.inputs.forEach((input) => {
      if (input.name === "name") {
        this.checkNameInput(input);
      } else if (input.name === "tel") {
        this.checkPhoneInput(input);
      } else {
        return;
      }
    });
  }
  checkNameInput(input) {
    let {name} = content;
    let isValid = false;
    input.addEventListener("keypress", function (e) {
      if (!e.key.match(/^[A-Za-zА-Яа-яЁё\s]/)) {
        e.preventDefault();
      }
    });
    input.addEventListener("input", () => {
      if (input.value.length >= 2) {
        this.valid(input);
        this.formData.name = input.value.trim();
        isValid = true;
      } else {
        this.invalid(input);
        isValid = false;
      }
      if (!isValid) {
        input.nextElementSibling.innerHTML =
        `${!this.isEn ? name.ua : name.en}`;
      } else {
        input.nextElementSibling.innerText = "";
      }
    });
  }
  checkPhoneInput(input) {
    let { template } = content;
    let isValid = false;
    this.createMask(input);
    input.addEventListener("input", () => {
      if (input.value.indexOf("_") === -1) {
        this.valid(input);
        this.formData.phone = input.value;
        isValid = true;
      } else {
        this.invalid(input);
        isValid = false;
      }
      if (!isValid) {
        input.nextElementSibling.innerHTML =
        `${!this.isEn ? template.ua : template.en}`;
      } else {
        input.nextElementSibling.innerText = "";
      }
    });
  }
  resetForm(btn) {
    let { send } = content;
    btn.classList.remove("disabled");
    btn.innerHTML =
    `${!this.isEn ? send.ua : send.en}`;
    this.form.reset();
    this.inputs.forEach((input) => {
      input.parentNode.classList = "form__item";
    });
    this.checkInputs();
  }

  async postData(url, data, btn) {
    if (this.form.classList.contains("form__help")) {
      new Modal(".modal").clearModal();
    }
    try {
      const response = await fetch(url, {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
          "Content-Type": "application/json",
        },
      });
      const {thankTitle, thankDescr } = content
      const modalText = document.createElement("div");
      modalText.classList = "success-content";
      modalText.innerHTML = `
      <svg class="icon">
      <use xlink:href="#logo-black"></use>
    </svg>
      <h2 class="fz-32">   ${!this.isEn ? thankTitle.ua : thankTitle.en}</h2>
      <div class="fz-18">${!this.isEn ? thankDescr.ua : thankDescr.en}</div>
      `;
      modal.querySelector(".modal__body").classList.add("success");
      modal.querySelector(".modal__body").appendChild(modalText);
      this.resetForm(btn);
      new Modal(".modal").openModal();
    } catch (error) {
      const modalText = document.createElement("div");
      modalText.classList = "fz-24 f-700";
      modalText.innerText = !this.isEn ? this.message.failure.ua : this.message.failure.en;
      modal.querySelector(".modal__body").classList.add("error");
      modal.querySelector(".modal__body").appendChild(modalText);
      this.resetForm(btn);
      new Modal(".modal").openModal();
      console.error("Ошибка:", error);
    }
  }

  init() {
    this.checkInputs();
    this.form.addEventListener("submit", (e) => {
      e.preventDefault();
      if (this.validateEmptyField()) {
        e.submitter.classList.add("disabled");
        e.submitter.innerHTML = `<svg class="icon">
        <use xlink:href="#spinner"></use>
      </svg>`;
        if (this.form.classList.contains("form__help")) {
          this.formData.title = "Потребую допомоги";
        }
        if (this.form.classList.contains("form-partner")) {
          this.formData.title = "Хочу стати партнером";
        }
        this.postData(this.path, this.formData, e.submitter);
      }
    });
  }
}
