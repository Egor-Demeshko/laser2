import {imagePositionIndex} from "/components/gallery/imagePositionIndex.js";


export function initGallery(){
  var arrows = document.querySelector(".gallery__arrows");
  var imagesPosition = 0;
  var gallery = document.querySelector(".gallery");
  initListeners();


  function initListeners(){
    arrows.addEventListener("click", (event)=>{
      arrowHandler(event);
    });

  }


  function arrowHandler(event){
    var target = event.target;
    var cardWidth = 0;
    var images = gallery.querySelector(".gallery__images");
    var length = 4;

    {
      /*определяем ширину карточку, чтобы правильно выбрать величину перемещение
      ширина карточки меняется динамически согласно general переменных*/
      cardWidth = Number(images.offsetWidth);
    }

    if(target.closest('div').dataset.arrow === "left"){
      if(imagesPosition === 0){
        images.style.transform = `translateX(-${ cardWidth * length }px)`;
        imagesPosition = length;
      } else if(imagesPosition <= length){
        imagesPosition -= 1;
        images.style.transform = `translateX(-${ cardWidth * imagesPosition }px)`;
      }
    }

    if(target.closest('div').dataset.arrow === "right"){
      if(imagesPosition === length){
        images.style.transform = `translateX(0)`;
        imagesPosition = 0;
      } else if(imagesPosition >= 0){
        imagesPosition += 1;
        images.style.transform = `translateX(-${ cardWidth * imagesPosition }px)`;
      }
    }

    {
      if(gallery){
        imagePositionIndex(imagesPosition, gallery);
      }
    }

  }
}
