//Script modal Avatars
//Declaration des variables
var modal = document.getElementById('ModalAvatar');
var modalButton = document.getElementById("modalBouton");
let closeBtn = document.getElementsByClassName('closeBtn')[0];
var varCasePerso = document.getElementsByClassName('avatars');          // Toutes les images qui ont le même nom de class
var srcImg='';                                                          // Chemin de l'image
var inputLienAvatar= document.getElementById('avatarImg');
 
// Event pour afficher le modal
modalButton.addEventListener('click', openModalAvatar);
// Event si on veut fermer le modal
closeBtn.addEventListener('click', closeModalAvatar);
// Event si on click dehors du modal
window.addEventListener("click", outsideClick);
// Function pour afficher le modal
function openModalAvatar(){
    modal.style.display = "block";
}
// Funcion pour cacher le modal
function closeModalAvatar() {
	modal.style.display = 'none';
}
// Function pour fermer le modal si on click dehors
function outsideClick(e){
    if(e.target == modal){
        modal.style.display = "none";
    }
}

// On récupère le chemin de l'image et on le met dans une variable
function RecupererUrlImg(imgClique) {
    srcImg=imgClique.getAttribute('src');
    // On met le lien de l'image dans l'input avatarImg du formulaire
    inputLienAvatar.setAttribute('value',srcImg);
    openModalAvatar();
}