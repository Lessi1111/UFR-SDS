<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ufr.css">
    <title>Document</title>
</head>

<body>
    <section class="menu">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="images/logo.jpg" alt="">
                    <h2>UFR/SDS</h2>
                </div>
                <div class="col-6">
                    <p>Créer un compte administrateur pour enregistrer <br>et lister les informations des etudiants de l'UFR/SDS</p>
                </div>
            </div>
        </div>
    </section>
    <section>
    <div class="container">
            <div class="row">

                <form action="" method="post">
                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label">NOM</label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" name="nom">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label">PRENOMS</label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control" name="prenom">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label">Email</label>
                        </div>
                        <div class="col-5">
                            <input type="email" class="form-control" name="mail">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label">MOT DE PASSE</label>
                        </div>
                        <div class="col-5">
                            <input type="password" class="form-control" name="mdp">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-2">
                            <label class="form-label">CONFIRMER MOT DE PASSE</label>
                        </div>
                        <div class="col-5">
                            <input type="password" class="form-control" name="mdp2">
                        </div>
                    </div>
                    <button class="btn btn-danger mt-4" name="submit">S'INSCRIRE</button>
                </form>


            </div>
        </div>
    </section>
</body>

</html>

<?php

include("./dbconnect.php");

if (isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $mdp = sha1($_POST["mdp"]);
    $mdp2 = sha1($_POST["mdp2"]);

    $query = "INSERT INTO `administrateur` (`nom`, `prenom`, `email`, `mot_de_passe`) 
VALUES ('$nom', '$prenom', '$mail', '$mdp')";

    $result = mysqli_query($connection, $query);
    if ($mdp != $mdp2) {
        echo '<script language="javascript"> alert("mot de passe incorrect")</script>';
    } else {
        if ($result) {
            echo '<script language="javascript"> alert("Inscription reussie")</script>';
            header("location: authentique.php");
        } else {

            echo '<script language="javascript"> alert("Inscription echouée")</script>';
        }
    }
}
?>