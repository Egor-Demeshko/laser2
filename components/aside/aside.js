(function aside(){
  "use strict"
  let aside = document.querySelector("aside");
  let firstShown = true;
  // setTimeout(()=>{
  //   aside.style.display = "flex";
  // }, 1000);
  window.addEventListener("scroll", ()=>{
    let windowHeight = window.innerHeight;
    let scrollTop = document.documentElement.scrollTop;

    if((windowHeight *0.65) < scrollTop){
      firstShown = false;
    };
    if(firstShown) return;

    if(scrollTop > windowHeight/2){
      aside.classList.remove("close");
      aside.classList.add("show");
    } else {
      aside.classList.add("close");
      aside.classList.remove("show");
    }
  });
})();
