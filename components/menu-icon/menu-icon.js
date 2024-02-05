"use strict"

window.addEventListener("load", initListeners());

function initListeners(){
  menuButtonClick();


  function menuButtonClick(){
    let details = document.querySelector("details");
    details.addEventListener("click", (event)=>{
      let target = event.target;
      if(target.tagName === "A" || target.tagName ==="BUTTON"){
        let details = event.target.closest("details");
        details.removeAttribute("open");
      }
    });
  }
}
