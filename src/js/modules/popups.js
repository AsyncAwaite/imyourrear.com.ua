export default class Modal {
  constructor(selector) {
    this.modal = document.querySelector(selector);
    this.modalBody = this.modal.querySelector(".modal__body");
  }
  openModal() { 

    this.adaptiveScroll();
    
    this.modal.classList.add("show");
    this.modal.classList.remove("hide");
    document.body.classList.add("active");
    this.attachModalEvents(this.modal);
  
  }
adaptiveScroll(){

  if(screen.height < this.modalBody.offsetHeight){
    this.modalBody.style.height = '100%';
    this.modalBody.style.overflow = 'scroll';
  }
  

}

  attachModalEvents() {
    if (this.modal.querySelector(".modal__close")) {
      this.modal
        .querySelector(".modal__close")
        .addEventListener("click", () => {
          this.closeModal(this.modal);
        });
    }

    document.addEventListener("keydown", (e) => {
      this.handleEscape(e);
    });
    this.modal.addEventListener("click", (e) => {
      this.handleOutside(e);
    });
  }
  clearModal(){
    
    this.modalBody.innerHTML = `
    <button type="button" class="modal__close pos-a"><svg class="icon"><use xlink:href="#close"></use></svg></button>
    `;
  }

  closeModal() {
    this.modal.classList.add("hide");
    this.modal.classList.remove("show");
    document.body.classList.remove("active");
 
    this.detachModalEvents(this.modal);
    setTimeout(() => {
      this.modalBody.classList = "modal__body";  
      this.modalBody.innerHTML = `
        <button type="button" class="modal__close pos-a"><svg class="icon"><use xlink:href="#close"></use></svg></button>
        `;
 
     }, 300);
  }

  detachModalEvents() {
    if (this.modal.querySelector(".modal__close")) {
      this.modal
        .querySelector(".modal__close")
        .removeEventListener("click", () => {
          this.closeModal(this.modal);
        });
    }
    document.removeEventListener("keydown", (e) => {
      this.handleEscape(e);
    });
    this.modal.removeEventListener("click", (e) => {
      this.handleOutside(e);
    });
  }
  handleEscape(event) {
    if (event.key === "Escape") {
      this.closeModal(this.modal);
    }
  }
  handleOutside(event) {
    const isClickOutside = !!event.target.closest(".modal__body");
    if (!isClickOutside) {
      this.closeModal(this.modal);
    }
  }
}
