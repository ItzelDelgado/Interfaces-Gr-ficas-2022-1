

document.getElementById("icon-menu").addEventListener("click", mostrar_menu);
function mostrar_menu(){
    document.getElementById("move-content").classList.toggle('move-container-all');
    document.getElementById("show-menu").classList.toggle('show-lateral');
}


                            //Buscador de contenido


//Ejecutando funciones
document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
document.getElementById("cover-ctn-search").addEventListener("click", ocultar_buscador);

//Declarando variables
bars_search =       document.getElementById("ctn-bars-search");
cover_ctn_search =  document.getElementById("cover-ctn-search");
inputSearch =       document.getElementById("inputSearch");
box_search =        document.getElementById("box-search");

//Funcion para mostrar el buscador
function mostrar_buscador(){

    bars_search.style.top = "80px";
    cover_ctn_search.style.display = "block";
    inputSearch.focus();
    if (inputSearch.value === ""){
        box_search.style.display = "none";
    }
}

//Funcion para ocultar el buscador
function ocultar_buscador(){
    bars_search.style.top = "-10px";
    cover_ctn_search.style.display = "none";
    inputSearch.value = "";
    box_search.style.display = "none";
}
//Creando filtrado de busqueda
document.getElementById("inputSearch").addEventListener("keyup", buscador_interno);
function buscador_interno(){
    filter = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");

    //Recorriendo elementos a filtrar mediante los "li"
    for (i = 0; i < li.length; i++){

        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;
        if(textValue.toUpperCase().indexOf(filter) > -1){

            li[i].style.display = "";
            box_search.style.display = "block";

            if (inputSearch.value === ""){
                box_search.style.display = "none";
            }
        }else{
            li[i].style.display = "none";
        }
    }
}

function Filtering() {
  let buttons = document.querySelectorAll('.btns button')
  let blocks  = document.querySelectorAll('.single')
  buttons.forEach(button => {
      button.addEventListener('click', (e) => {
          blocks.forEach(block => {
              block.classList.remove('active')
              block.style.transform = `scale(0)`;
              block.style.display = `none`; 
              block.style.width = `0`;
          })

          blocks.forEach(blk => {
              if (e.target.dataset.menu == blk.dataset.menu) {
                if (window.matchMedia("(min-width: 900px)").matches) {
                    blk.classList.add('active')
                    blk.style.transform = `scale(1)`;
                    blk.style.display = `block`; 
                    blk.style.width = `20%`;
                  } else {
                    blk.classList.add('active')
                    blk.style.transform = `scale(1)`;
                    blk.style.display = `block`; 
                    blk.style.width = `100%`;
                  }

              }
          })
      if (e.target.dataset.menu == 'all'){
          blocks.forEach(block => {
            if (window.matchMedia("(min-width: 900px)").matches) {
                block.classList.add('active')
                block.style.transform = `scale(1)`;
                block.style.display = `block`; 
                block.style.width = `20%`;
            }else{
                block.classList.add('active')
                block.style.transform = `scale(1)`;
                block.style.display = `block`; 
                block.style.width = `100%`;
            }


          })
      }


      })
  })
}
Filtering()

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

// ALIMENTOS




