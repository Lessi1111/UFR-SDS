<?php
include("./dbconnect.php");
$select = "SELECT * FROM tuteur";
$resultat = mysqli_query($connection, $select);
$rows = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
?>



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
                    <a href="liste.php">lister</a>
                </div>
                <div class="col-2 mt-10">
                    <a href="./deconnexion.php">Deconnexion</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">

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
                            <label class="form-label">Date de naissance</label>
                        </div>
                        <div class="col-5">
                            <input type="date" class="form-control" name="naissance">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-1">
                            <label class="form-label">Email</label>
                        </div>
                        <div class="col-5">
                            <input type="email" class="form-control" name="mail">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-1">
                            <label class="form-label">Numero</label>
                        </div>
                        <div class="col-5">
                            <input type="number" class="form-control" name="numero">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-1">
                            <label class="form-label">Tuteur</label>
                        </div>
                        <div class="col-5">
                            <select name="id" id="" class="form-control">
                                <option value="1">selectionner un tuteur</option>
                                <?php foreach ($rows as $row) { ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['nom_tuteur'] ?> <?= $row['prenom_tuteur'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-danger mt-4" name="submit">Enregistrer</button>
                </form>


            </div>
        </div>
    </section>
    <div class="nouveau">
        <p>Tous les nouveaux tuteurs doivent d'abord etre ajouté<br>à travers le lien ci dessous</p>
        <a href="tuteur.php">Ajouter un tuteur</a>
    </div>
    <h5>UFR/SDS 2022 tous droits reservés</h5>
</body>

</html>

<?php

include("./dbconnect.php");

if (isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date = $_POST["naissance"];
    $mail = $_POST["mail"];
    $numero = $_POST["numero"];
    $id = $_POST["id"];


    $query = "INSERT INTO `etudiant` (`nom`, `prenom`,`date_de_naissance`,`email`, `numero`,`id_tuteur`) 
    
VALUES ('$nom', '$prenom','$date','$mail','$numero','$id')";

    $result = mysqli_query($connection, $query);
    if ($result) {
        echo '<script language="javascript"> alert("Etudiant enregistré avec succès")</script>';
    } else {

        echo '<script language="javascript"> alert("Erreur etudiant non enregistré")</script>';
    }
}
?>