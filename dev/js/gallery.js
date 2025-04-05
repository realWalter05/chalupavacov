var body = document.body;
let imgDiv = document.createElement("div");
let previous = document.createElement("img");
let img = document.createElement("img");
let next = document.createElement("img");
let close = document.createElement("img");
let currentImgNumberText = document.createElement("p");
let buttonsHeight;

function OpenImg(imageId, directory, imagesCount) {
    document.body.style.overflow = "hidden";
    window.ontouchmove = function (e) {
      e.preventDefault();
   };

   body.appendChild(imgDiv);
   imgDiv.setAttribute("id", "img_window");
   imgDiv.setAttribute("class", "img_window");
   imgDiv.setAttribute("onclick", "CloseImg()");

    if (window.innerWidth > 800) {
        buttonsHeight = ((window.pageYOffset + imgDiv.offsetHeight / 2) - next.offsetHeight / 2) + "px";
    } else if(window.innerWidth < 800) {
        buttonsHeight = "auto";
    }

   body.appendChild(previous);
   previous.setAttribute("class", "previous_arrow");
   previous.setAttribute("src", "./img/icons/previous.png");
   previous.setAttribute("alt", "Zpátky");
   previous.style.top = buttonsHeight;
   previous.setAttribute("onclick", "ChangeImg(" + imageId + ",1,\"" + directory + "\"," + imagesCount + ");");

   body.appendChild(next);
   next.setAttribute("class", "next_arrow");
   next.setAttribute("src", "./img/icons/next.png");
   next.setAttribute("alt", "Další");
   next.style.top =  buttonsHeight;
   next.setAttribute("onclick", "ChangeImg(" + imageId + ",0,\"" + directory + "\"," + imagesCount + ");");

   imgDiv.appendChild(img);
   img.setAttribute("id", "img" + imageId);
   img.setAttribute("src", directory + "/img" + imageId + ".jpg");
   img.setAttribute("alt", "Fotka číslo " + imageId);

   imgDiv.appendChild(currentImgNumberText);
   currentImgNumberText.setAttribute("class", "current_img_number_text");
   currentImgNumberText.innerText = (imageId + 1) + "/" + (imagesCount + 1);
}

function ChangeImg(imageId, changeDir, directory, imagesCount) {
    imgDiv.removeChild(img);
    if (changeDir === 0) {
        if (imageId < imagesCount) {
            imageId++;
        } else {
            imageId = 0;
        }
    } else {
        if (imageId > 0) {
            imageId--;
        } else {
            imageId = imagesCount;
        }
    }
    CloseImg();
    OpenImg(imageId, directory, imagesCount);
    currentImgNumberText.innerText = (imageId + 1) + "/" + (imagesCount + 1);
}

function CloseImg() {
   document.body.style.overflow = "auto";
   window.ontouchmove = function (e) {
      return true;
   };
   let imgDiv = document.getElementById("img_window");
   body.removeChild(imgDiv);

   let next = document.querySelector(".next_arrow");
   body.removeChild(next);

   let previous = document.querySelector(".previous_arrow");
   body.removeChild(previous);
}
