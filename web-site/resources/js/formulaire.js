//      MODAL    //

//Get the modal element
var modal = document.getElementById("simpleModal");
var modal2 = document.getElementById("simpleModal2");
var modalAvatar = document.getElementById("ModalAvatar");
var varCasePerso = document.getElementsByClassName('avatars');
var srcImg = '';
var inputLienAvatar = document.getElementById('cliAvatar');

//function to open modal 
function openModal() {
  modal.style.display = "block";
}
function openModal2() {
  modal2.style.display = "block";
}
//function to close modal 
function closeModal() {
  modal.style.display = "none";
}
function closeModal2() {
  modal2.style.display = "none";
}
function openModalAvatar() {
	modalAvatar.style.display = 'block';
  modal.style.display = 'none';
}
function closeModalAvatar() {
	modalAvatar.style.display = 'none';
  modal.style.display = 'block';
}

// On récupère le chemin de l'image et on le met dans une variable
function RecupererUrlImg(imgClique) {
    srcImg=imgClique.getAttribute('src');
    // On met le lien de l'image dans l'input avatarImg du formulaire
    inputLienAvatar.setAttribute('value',srcImg);
    closeModalAvatar();
}