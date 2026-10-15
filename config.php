 <?php

// echo "Bienvenue dans notre site";
// nous allons verifier les infos

if (!empty($_POST =['name']) && !empty($_POST =['email']) && !empty($_POST['mdp'])) {  //!empty sers a accpter un champs sil ya vraiment du texte
    // on verifie ici l'utilisateur aentrer des infos
    echo "Bienvenu(e)";//si oui afficher bienvenu
  }else{
    echo "Veuillez entrer des informations correctes";
  }











?>