(
  function setHandlers(){
    "use strict"
    const coordinates = "53.902284, 27.561831";
    let copy = document.querySelector(".copy");

    copy.addEventListener("click", ()=>{
      let clipboard = navigator.clipboard;
      clipboard.writeText(coordinates);
      copy.style.background = "green";
      setTimeout(()=>{
        copy.style.background = "var(--black)";
      }, 6000);
    });
  }
)();
