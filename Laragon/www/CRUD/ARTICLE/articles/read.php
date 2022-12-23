<?php

if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    // inclure ma connexion
    require_once "../php/config.php";

    // prepare ma requete pour recupérer le use en fonction de l'id
    $sql = "SELECT * FROM articles WHERE id = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {    //test
        mysqli_stmt_bind_param($stmt, "i", $param_id);  // param_id relié au id = ? grâce au mysqli_prepare     "i" pout integer

        $param_id = trim($_GET['id']);   // fonction trim pour faire un nettoyage

        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);   //recupération de toute la table

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                $nom = $row['nom'];
                $description = $row['description'];
                $quantite = $row['quantite'];
                $prix = $row['prix'];
                $categorie = $row['categorie'];
            } else {
                header("location: index.php");
                exit();
            }
        } else {
            echo "Oups, problème de connexion à la BDD, veuillez réessayer ultérieurement";
        }
    }
    // vide de la mémoire
    mysqli_stmt_close($stmt);

    //deconnexion de la BDD
    mysqli_close($link);
} else {
    header("location : index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body{
            background : linear-gradient(320deg,rgb(242, 113, 33),rgb(233, 64, 87),rgb(138, 35, 135));
            background-repeat : no-repeat;
            min-height: 100vh;
            font-family: 'Montserrat', sans-serif;
        }
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">Lecture</h1>
                    <div class="card p-3 my-3" style="background-color: rgba(255, 255, 255, 0.3); border-radius: 15px; backdrop-filter: blur(5px); box-shadow: 0px 0.4px 30px rgba(0, 0, 0, 0.5);">
                        <div class="form-group">
                            <label for=""><b>Nom</b></label>
                            <p><?= $row["nom"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Description</b></label>
                            <p><?= $row["description"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Quantité</b></label>
                            <p><?= $row["quantite"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Prix</b></label>
                            <p><?= $row["prix"]; ?></p>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Catégorie</b></label>
                            <p><?= $row["categorie"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="../index.php" class="btn btn-secondary ml-2">Cancel</a>
    </div>


</body>

</html>