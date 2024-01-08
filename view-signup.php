

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    
    <?php
    if (!empty($errors)) {
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
    ?>

    >
    <?php
    if (!$showForm) { 
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $courriel = $_POST["courriel"];
        $dateNaissance = $_POST["date_naissance"];

       
        echo "<h2>Synthèse des informations :</h2>";
        echo "<p>Nom : $nom</p>";
        echo "<p>Prénom : $prenom</p>";
        echo "<p>Courriel : $courriel</p>";
        echo "<p>Date de naissance : $dateNaissance</p>";

        
        echo "<p>Un mail de confirmation a été envoyé à l'adresse $courriel.</p>";
    }
    ?>

    
    <?php
    if ($showForm) { 
    ?>
        <form method="post" action="controler-signup.php">
           
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom">
            

            <input type="submit" value="S'enregistrer">
        </form>
    <?php
    } else {
        
        echo "<p>Merci de vous être enregistré !</p>";
    }
    ?>


</body>

</html>
