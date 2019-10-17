

/********************************** 
 - General - CAMBIO IMAGEN MENÚ NAV. 
**********************************/
function myFunction(x) {
    x.classList.toggle("change");
}


/********************************** 
 - trabajos.html - MODAL BOX  
**********************************/

// // Para el Modal Box
var modal = document.getElementById("myModal");
var modalDos = document.getElementById("myModalDos");
var modalTres = document.getElementById("myModalTres");

// Botón que acciona el Modal Box
var btn = document.getElementById("myBtn");
var btnDos = document.getElementById("myBtnDos");
var btnTres = document.getElementById("myBtnTres");

// Botón de cierre del Modal Box
var span = document.getElementsByClassName("close")[0];
var spanDos = document.getElementsByClassName("close")[1];
var spanTres = document.getElementsByClassName("close")[2];

// Cuando el usuario hace click en el botón se abre el ModalBox
btn.onclick = function() {
    modal.style.display = "block";
}
btnDos.onclick = function() {
    modalDos.style.display = "block";
}
btnTres.onclick = function() {
    modalTres.style.display = "block";
}

// Cuando el usuario hace click en la X se cierra el Modal Box
span.onclick = function() {
    modal.style.display = "none";
}
spanDos.onclick = function() {
    modalDos.style.display = "none";
}
spanTres.onclick = function() {
    modalTres.style.display = "none";
}

// Cuando el usuario hace click en cualquiér sitio fuera del Modal BhxBrowser, este se cierra:
window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}


