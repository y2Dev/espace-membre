<?php
include "config.php";
include "common/form.class.php";
$formConnexion = new FormHtml();
$formInscription = new FormHtml();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>T1000</title>
</head>

<body>
    <header>
        <h1>Virtual dash</h1>
    </header>

    <!-- Début connexion -->
    <section class="connexion">
        <?php
            $formConnexion->title = "Connexion" ;
            $formConnexion->actionText = "connexion.php" ;
            $formConnexion->submitText = "Je me connecte !" ;
            echo $formConnexion->afficheForm();
        ?>
    </section>


    <!-- Début inscription -->
    <section class="inscription">
    <?php
            $formInscription->title = "Inscription" ;
            $formInscription->actionText = "signin.php" ;
            $formInscription->submitText = "Je m'inscris !" ;
            echo $formInscription->afficheForm();
        ?>
    </section>


    <!-- Début dash -->
    <section class="dash">
        <h2>Dash</h2>
    </section>


    <footer>
        <h3>
            <?php
            echo date("Y");
            ?>
        </h3>
    </footer>

</body>

</html>