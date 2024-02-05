export function goUpButton(){
  var element = document.createElement("div");
  element.classList.add("goUp");
  element.setAttribute("aria-label", "перейти вверх страницы");
  element.setAttribute("tabindex", 0);
  setupElement();
  addRulingScripts();
  return element;

  function setupElement(){
<<<<<<< HEAD
    const route = document.body.dataset.laserroute;

    element.innerHTML = `<svg aria-label="hidden">
                           <use href="${route}/assets/icons/icons.svg#arrow"></use>
=======
    element.innerHTML = `<svg aria-label="hidden">
                           <use href="/assets/icons/icons.svg#arrow"></use>
>>>>>>> 45a897c2fef4ebf229df8eb4c035651cf272c50e
                         </svg>`;
  }

  function addRulingScripts(){
    if(!element) return;
    element.addEventListener("click", ()=>{
      window.scroll({
        top: 0,
        left: 0,
        behavior: "smooth"
      });
    });

    document.addEventListener("scroll", ()=>{
      let windowHeight = window.innerHeight;
      let scrollTop = document.documentElement.scrollTop;
      let scrollRemain = document.documentElement.offsetHeight
                         - document.documentElement.scrollTop
                         - windowHeight;

      if(scrollTop > windowHeight/2){
        element.style.display = "flex";
      } else {
        element.style.display = "none";
      }

      if(scrollRemain < windowHeight/3){
        element.classList.add("stop-scroll");
      } else {
        element.classList.remove("stop-scroll");
      }
    });
  }
}
