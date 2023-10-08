<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>

</head>
<body>
    <form action="/result.php" method="post" class="container bg-light border rounded p-5">
        <h1 class="text-center">Votre commande</h1>

        <p class="row">
            <label for="fprenom" class="form-label">Prenom : </label>
            <input type="text" id="fprenom" name="prenom"  require="true" class="form-control >
        </p>

        <p class="row">
            <label for="fnom" class="form-label">Nom : </label>
            <input type="text" id="fnom" name="nom"  require="true" class="form-control">
        </p>

        <p class="row">
            <label for="femail" class="form-label">Email : </label>
            <input type="email" id="femail" name="email"  require="true" class="form-control">
        </p>

        <p class="row">
            <label for="ftelephone" class="form-label">Telephone : </label>
            <input type="text" id="ftelephone" name="telephone"  require="true" class="form-control">
        </p>

        <p class="row">
            <label for="fsujet" class="form-label">Choisis un sujet: </label>
            
            <select id="fsujet" name="sujet" require="true" class="form-control">
                <option value="">Motif du contact</option>
                <option value="Commande non reçue">Commande non reçue</option>
                <option value="Commande erronée">Commande erronée</option>
              </select>
        </p>

        <p class="row">
            <label for="fmessage" class="form-label">Message : </label>
            <textarea id="fmessage" rows="10" cols="30" name="message"  require="true" class="form-control" ></textarea>
        </p>

        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </p>

    </form>

</body>
</html>

