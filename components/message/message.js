export class ErrorMessageElement{
    #errorMessageElement;
    #message;
  
    constructor(message =""){
      this.#message = message;
      this.#errorMessageElement = this.createElement("div", "error-message");
      this.#setTitleAndText();
    }
  
  
    getErrorMessageElement(){
      return this.#errorMessageElement;
    }
  
  
    showMessage(){
      this.#errorMessageElement.classList.add("error-message_show");
      this.#errorMessageElement.classList.remove("error-message_hide");
  
    }
  
    hideMessage(){
      this.#errorMessageElement.classList.add("error-message_hide");
      this.#errorMessageElement.classList.remove("error-message_show");
    }
  
  
    #setTitleAndText(){
      let title = "";
      let text = "";
  
      if(this.#message === "ok"){
        title = "Отправлено!";
        text = "Все данные с формы успешно отправлены";
      } else if(this.#message === "error"){
        title = "Ошибка! Не отправлено!";
        text = "Отправить ваше сообщение не удалось. \n Попробуйте еще один раз и если ошибка повторится напишите нам в мессендежр.";
      }
      title = this.createElement("h3", "error-message__title", title);
      text = this.createElement("span", "error-message__text", text);
  
      this.#errorMessageElement.append(title, text);
    }


    createElement(tagName, className, textContent){
        const element = document.createElement(tagName);
        element.className = className;
      
        if(textContent){
          element.textContent = textContent;
        }
      
        return element;
    }
  }