import { ErrorMessageElement } from "../message/message.js";

(function createFormScripts(){
  const valid = "form-valid";
  const invalid = "form-invalid";
  const form = document.querySelector("#form");
  const button = form.querySelector("button");
  initListeners();


  function initListeners(){
    if(!form) return;
    form.addEventListener("keyup", (e) => keyupHandler(e));
    form.addEventListener("submit", (e) => submitHandler(e));
    form.addEventListener("invalid", (e) => invalidHandler(e));
    inputFocusChecker();
  }


  function keyupHandler(e){
    let target = e.target;
    if(target.tagName === "INPUT"){
      let status = target.reportValidity();
      if(status){
        validHandler(e);
      } else {
        invalidHandler(e);
      }
    };
  }




  function inputFocusChecker(){
        form.addEventListener("focusin", function checkValidity(e){
          let target = e.target;
          if(target.value || target.tagName === "INPUT"){
            if(target.reportValidity()){
              validHandler(e);
            } else {
              invalidHandler(e);
            }
          }
        });
  }


  function validHandler(e){
    let target = e.target;
    target.classList.remove(invalid);
    target.classList.add(valid);
  }


  function invalidHandler(e){
    e.preventDefault();
    let target = e.target;
    target.classList.remove(valid);
    target.classList.add(invalid);
  }


  function submitHandler(e){
    e.preventDefault();
    let status = checkAllInputs();
    if(status){
      processForm();
    }
  }


  function checkAllInputs(){
    let status = true;
    let elements = form.elements;
    for(let element of elements){
      if(element instanceof HTMLInputElement){
        if(!element.reportValidity()){
          status = false;
        };
      }
    }
    return status;
  }


  async function processForm(){
    let data = new FormData(form);
    locForm();
    let response = await sendData(data).catch( (error) => {
                                          console.log(error.message);
                                        } );
    console.log("Process Form, response: ", response);
    if(response.ok){
      showMessage("ok");
      unlockForm();
      formReset();
    } else {
      showMessage("error");
    }
  }


  async function sendData(data){
    return await fetch(`/mail.php`, {
                                       method: "POST",
                                       body: data
                                     });
  }


  function formReset(){
    form.reset();

    for(let item of form.elements){
      if (item.tagName === "INPUT"){
        item.classList.remove(valid);
        item.classList.remove(invalid);
      }
    }
  }


  function locForm(){
    for(let item of form.elements){
      if(item.tagName === "INPUT" || item.tagName === "BUTTON"){
        item.setAttribute("disabled", true);
      }
    }
  }


  function unlockForm(){
    for(let item of form.elements){
      item.removeAttribute("disabled");
    }
  }


  function showMessage(sign){
    let message = new ErrorMessageElement(sign);
    let messageElement = message.getErrorMessageElement();
    form.append(messageElement);
    message.showMessage();
    setTimeout(() => {
      message.hideMessage.call(message);
      unlockForm();
    }, 5000);

    
  }
})();
