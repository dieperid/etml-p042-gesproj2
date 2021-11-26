//#region  Methode pour le switch
try {
  //Récupération du switch dans une variable
  let btnSwitch = document.getElementById('chBoxDarkMode');

  //Ajout d'un événement au switch dès qu'on clique dessus
  btnSwitch.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

    //Sauvegarde le mode dans le localStorage
    if (document.body.classList.contains('dark-mode')) {
      localStorage.setItem('dark-mode', 'true');
    } else {
      localStorage.setItem('dark-mode', 'false');
    }

    //Affichage dans la console si le mode est activé ou pas
    console.log(localStorage.getItem('dark-mode'));
  });
} catch {
  console.log("btnSwitch n'existe pas dans la page actuelle");
}
//#endregion

//#region  Verification sur chaque page

//Si le dark-mode est activé
if (localStorage.getItem('dark-mode') === 'true') {
  //Active le mode sombre
  document.body.classList.add('dark-mode');
  //Récupération du switch dans une variable
  let btnSwitch = document.getElementById('chBoxDarkMode');
  //Laisse le switch activé
  try {
    btnSwitch.checked = true;
    console.log(btnSwitch);
  } catch {
    console.log("btnSwitch n'existe pas dans la page actuelle");
  }
} else {
  //Desactive le mode sombre
  document.body.classList.remove('dark-mode');
}
//#endregion
