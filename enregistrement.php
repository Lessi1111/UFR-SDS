
<?php

include ("./index.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>

            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo-auf">
                    </div>
                    <div class="col-3">
                        <a href="liste.php">LISTE</a>
                    </div>
                    <div class="col-3">
                   <a href="deconnexion.php" class="btn btn-danger">DECONNEXION</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1>FORMULAIRE <br> D'ENREGISTREMENT</h1>

        <div class="container">

            <form action="./ajouter.php" method="post">
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
                        <label class="form-label">PRENOM</label>
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" name="prenom">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label">DATE DE NAISSANCE</label>
                    </div>
                    <div class="col-5">
                        <input type="date" class="form-control" name="naissance">
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
                        <label class="form-label">NUMERO</label>
                    </div>
                    <div class="col-5">
                        <input type="number" class="form-control" name="numb">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label">DATE DE DEBUT</label>
                    </div>
                    <div class="col-5">
                        <input type="date" class="form-control" name="debut">
                    </div>
                </div>
                <button class="btn btn-danger mt-4" name="submit">ENREGISTRER</button>
            </form>
        </div>
        </div>
        <p>Les donnes récupérées via ce formulaire sont utilisées <br>pour permettre aux abonnés 
                                    d’accéder à nos lettres d'information</p>

    </main>

    <footer>
        <div class="pied">
        <div class="bloc">
            <div class="ligne">
                <a href="https://web.facebook.com/aufinternational?_rdc=1&_rdr"><img src="css/bootstrap-icons/facebook.svg" alt="lien-facebook"></a>
                <a href="https://www.youtube.com/user/planeteauf" style="margin-left: 15px;"><img src="css/bootstrap-icons/youtube.svg" alt="lien-youtube"></a>
            </div>
            <a href="https://twitter.com/auf_org"><img src="css/bootstrap-icons/twitter.svg" alt="lien-twiter"></a>
        </div>

        <div class="lien">
            <a href="https://www.auf.org/a-propos/contact/">Contacts</a>
            <a href="https://www.auf.org/mentions-legales/">Mentions légales</a>
            <a href="https://www.auf.org/politique-de-confidentialite/">Politiques de confidentialités</a>
        </div>
    </div>
    <h2>AUF 2022 Tous droits réservés</h2>
    </footer>



    <script rel="stylesheet" href="js/bootstrap.js"></script>
</body>

</html>

</body>
</html>
