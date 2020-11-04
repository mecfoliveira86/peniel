let time = 5000,
    currentImageIndex = 0,
    imagens = document.querySelectorAll("#slider img"),
    textos = document.querySelectorAll("#textSlider p"),
    max = imagens.length;

function nextImage(){
    
    imagens[currentImageIndex].classList.remove("selected");
    textos[currentImageIndex].classList.remove("selected");

    currentImageIndex++;
    
    if(currentImageIndex==max){
        currentImageIndex=0;
    }

    imagens[currentImageIndex].classList.add("selected");
    textos[currentImageIndex].classList.add("selected");
    
}

function start(){
    console.log("window_loaded");
    setInterval(()=>{
        nextImage();
    }, time);
}

window.addEventListener("load", start);