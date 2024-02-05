import{initGallery} from "/components/gallery/gallery.js";
import{goUpButton} from "/components/goUp/goUp.js";

(function init(){
  initGallery();

  {
    document.body.append(goUpButton());
  }
})();
