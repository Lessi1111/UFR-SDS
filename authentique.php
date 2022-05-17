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
                <div class="col-4 mt-10">
                   <a href="inscription.php">Créer un cpmpte</a>
                   <p>Connectez-vous</p>
                </div>
            </div>
        </div>
    </section>
    <section>
    <div class="container">

<form action="./Authentique.php" method="post">
    <div class="row mt-4">
        <div class="col-2">
            <label class="form-label">Email</label>
        </div>
        <div class="col-5">
            <input type="email" class="form-control" name="nombre-1">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-2">
            <label class="form-label">MOT DE PASSE</label>
        </div>
        <div class="col-5">
            <input type="password" class="form-control" name="nombre-2">
        </div>
    </div>
    <button type="submit" class="btn btn-danger mt-4" name="conect">CONNECTION</button>
</form>
</div>
    </section>
</body>
</html>

<?php
session_start();

include ("./dbconnect.php");
 if (isset($_POST['conect'])){
 $mailconnect = htmlspecialchars($_POST['nombre-1']);
 $mdpconnect = sha1($_POST['nombre-2']);

 if (!empty($mailconnect) AND !empty($mdpconnect)){
 $admin = "SELECT * FROM Administrateur WHERE Email = '$mailconnect' AND MOT_DE_PASSE = '$mdpconnect'";
 $result = mysqli_query($connection,$admin);
 $row = mysqli_num_rows($result);
 
 if ($row > '0'){
   
    header("location: etudiant.php");
 }
 else {
     echo "Mauvais Email ou mot de passe";
 }
 }
else {
   
}


 }
?>
