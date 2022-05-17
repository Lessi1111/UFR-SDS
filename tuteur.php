<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/tuteur.css">
    <title>Document</title>
</head>

<body>
    <section class="menu">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="images/logo.jpg" alt="" style="width: 150px; height: 150px; ">
                    <h2>UFR/SDS</h2>
                </div>
                <div class="col-2 mt-10">
                    <a href="./etudiant.php">enregistrer</a>
                </div>
                <div class="col-2 mt-10">
                    <a href="./liste.php">lister</a>
                </div>
                <div class="col-2 mt-10">
                    <a href="./deconnexion.php">Deconnexion</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h1>NOUVEAU TUTEUR</h1>
        <form action="" method="post">
            <div class="row mt-4">
                <div class="col-1">
                    <label class="form-label">NOM</label>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" name="nom">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-1">
                    <label class="form-label">PRENOMS</label>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" name="prenom">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-1">
                    <label class="form-label">NUMERO</label>
                </div>
                <div class="col-5">
                    <input type="number" class="form-control" name="numb">
                </div>
            </div>

            <button class="btn btn-danger mt-4" name="submit">Ajouter</button>
        </form>
    </section>
    <h5>UFR/SDS 2022 tous droits reservés</h5>
</body>

</html>


<?php

include("./dbconnect.php");

if (isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $numero = $_POST["numb"];


    $query = "INSERT INTO `tuteur` (`nom_tuteur`, `prenom_tuteur`, `numero_tuteur`)
    
VALUES ('$nom', '$prenom','$numero' )";

    $result = mysqli_query($connection, $query);
    if ($result) {
        echo '<script language="javascript"> alert("Inscription reussie")</script>';
    } else {

        echo '<script language="javascript"> alert("Inscription echouée")</script>';
    }
}
?>