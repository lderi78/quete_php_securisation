<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
$errors =[];

 // var_dump($_POST);

  if ( empty( trim($_POST['prenom']) )  || trim($_POST['prenom']) === '' ) {
    $errors[] = "Le prénom est obligatoire";
  }
  if ( empty( trim($_POST['nom']) )  || trim($_POST['nom']) === '' ) {
    $errors[] = "Le nom est obligatoire";
  }
  if ( empty( trim($_POST['email']) )  || trim($_POST['email']) === '' ) {
      $errors[] = "L'email est obligatoire";
  }
  if ( empty( trim($_POST['telephone']) )  || trim($_POST['telephone']) === '' ) {
      $errors[] = "Le telephone est obligatoire";
  }
  if ( empty( trim($_POST['sujet'] ) ) || trim($_POST['sujet']) === '' ) {
      $errors[] = "Le motif est obligatoire";
  }
  if ( empty( trim($_POST['message']) )  || trim($_POST['message']) === '' ) {
      $errors[] = "Le message est obligatoire";
  }
  // L'email est au bon format ?
  if(!filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)) {
  $errors[] = "Email au mauvais format";
  }
 // var_dump($errors);

    // Si pas d'erreur, on traite les données.
    if(empty($errors)) {
        require('thanks.php');
        //header('Location: thanks.php');
    }

 // Si il y a des erreur affiche les .   
 if (count($errors) > 0) {
    for($i = 0; $i<count($errors); $i++) {
    echo "$errors[$i]" . '<br>';
 } }
}

?>

