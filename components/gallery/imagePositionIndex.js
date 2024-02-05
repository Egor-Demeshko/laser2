export function imagePositionIndex(index, cardElement){
  const imageBar = cardElement.querySelector(".gallery__navigation_progress");

  if(imageBar){
    let collection = imageBar.children;
    let item = collection.item(index);
    let activeImage = imageBar.querySelector(".gallery__progress_element-active");

    activeImage.classList.toggle("gallery__progress_element-active");
    item.classList.toggle("gallery__progress_element-active");
  }
}
