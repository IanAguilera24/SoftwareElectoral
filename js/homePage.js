
//cambio de logos por desplazamiento del navbar
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle('down',window.scrollY > 0);

    var logoEscom = document.querySelector(".Escom");
    var logoIpn = document.querySelector(".Ipn");
    if (window.scrollY > 0){
        logoEscom.setAttribute('src', 'resources/icons/empresa.png')
        logoIpn.setAttribute('src', 'resources/icons/votar.png')
    } else {
        logoEscom.setAttribute('src', 'resources/icons/empresa.png')
        logoIpn.setAttribute('src', 'resources/icons/votar.png')
    }
});

//funcionamiento del menu responsivo
var menu = document.querySelector('.menu');
var menuBtn = document.querySelector('.menu-btn');
var closeBtn = document.querySelector('.close-btn');

menuBtn.addEventListener("click", () => {
    menu.classList.add('active');
})

closeBtn.addEventListener("click", () => {
    menu.classList.remove('active');
})

//funcionamiento de la seccion de ejercicios y su preview
let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.product-container .product').forEach(product =>{
  product.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = product.getAttribute('data-name');
    previewBox.forEach(preview =>{
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.fa-times').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});
