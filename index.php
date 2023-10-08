<?php

// Tous les champs sont requis et ne doivent pas être vides.
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
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
        if(!filter_var(($email), FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email au mauvais format";
    }

    // Si pas d'erreur, on traite les données.
    if(empty($errors)) {
        header('Location: thanks.php');
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>

</head>
<body>
    <form action="/thanks.php" method="post" class="container bg-light border rounded p-5">
        <h1 class="text-center">Votre commande</h1>

        <p class="row">
            <label for="fprenom" class="form-label">Prenom : </label>
            <input type="text" name="prenom"  required = "true">
        </p>

        <p class="row">
            <label for="fnom" class="form-label">Nom : </label>
            <input type="text" name="nom" required = "true">
        </p>

        <p class="row">
            <label for="femail" class="form-label">Email : </label>
            <input type="email" name="email" required = "true">
        </p>

        <p class="row">
            <label for="ftelephone" class="form-label">Telephone : </label>
            <input type="text" name="telephone" required = "true">
        </p>

        <p class="row">
            <label for="fsujet" >Choisis un sujet: </label>
            
            <select name="sujet" required = "true">
                <option value="">Motif du contact</option>
                <option value="Commande non reçue">Commande non reçue</option>
                <option value="Commande erronée">Commande erronée</option>
              </select>

        </p>

        <p class="row">
            <label for="fmessage" >Message : </label>
            <textarea id="fmessage" rows="10" cols="30" name="message" required = "true"></textarea>
        </p>

        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </p>

    </form>

</body>
</html>