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
                    <a href="etudiant.php">Enregistrer</a>
                </div>
                <div class="col-2 mt-10">
                    <a href="./deconnexion.php">Deconnexion</a>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
            <div class="row">
                <?php
                include("./dbconnect.php");
                $sql = "SELECT * FROM etudiant inner join tuteur on etudiant.id_tuteur=tuteur.id";
                $resultat = mysqli_query($connection, $sql) or die("bad query");

                echo "<table class='table-primary' border='1'>";
                echo "<tr class='table-primary'>
                <td class='table-primary'><b>ID</b></td> 
                <td class='table-primary'><b>NOM</b></td> 
                <td class='table-primary'> <b>PRENOM</b></td> 
                <td class='table-primary'> <b>DATE_NAISSANCE</b></td> 
                <td class='table-primary'> <b>Email</b></td> 
                <td class='table-primary'> <b>NUMERO</b></td> 
                <td class='table-primary'> <b>NOM_tuteur</b></td> 
                <td class='table-primary'> <b>PRENOM_tuteur</b></td> 
                <td class='table-primary'> <b>NUMERO_tuteur</b></td> 
                </tr>\n";
                while ($row = mysqli_fetch_assoc($resultat)) {
                    echo " <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nom']}</td>
                    <td>{$row['prenom']}</td>
                    <td>{$row['date_de_naissance']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['numero']}</td>
                    <td>{$row['nom_tuteur']}</td>
                    <td>{$row['prenom_tuteur']}</td>
                    <td>{$row['numero_tuteur']}</td>
                    </tr>\n";
                }
                echo "</table>";




                ?>

            </div>
        </div>
        <h5>UFR/SDS 2022 tous droits reservés</h5>

</body>
</html>