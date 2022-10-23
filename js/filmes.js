function increase(imgContent) { // Clonar imagem para um container maior e esmaecer imagem menor
    let imgSmall = imgContent.querySelector('img');
    let imgClone = imgSmall.cloneNode();
    let contentImgLg = document.querySelector('#img-lg');

    imgSmall.style.opacity = 0.7;

    imgClone.style = "width: 100%; height: 100%;";

    contentImgLg.appendChild(imgClone);
}

function decrease(imgContent) { // Remover o clone da imagem e desmaecer a imagem menor
    let imgSmall = imgContent.querySelector('img');
    let contentImgLg = document.querySelector('#img-lg');
    let imgLg = contentImgLg.querySelector('img');

    contentImgLg.removeChild(imgLg);

    imgSmall.style.opacity = 1;
}
