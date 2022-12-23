<?php
require_once "../php/config.php";

// définir nos variables et init
$nom = $description = $quantite = $prix = $categorie = "";

$nom_err = $description_err = $quantite_err = $prix_err = $categorie_err = "";


if(isset($_POST["id"]) && !empty($_POST["id"])){
    $id = $_POST["id"];

    $nom_ok = trim($_POST["nom"]);

    if(empty($nom_ok)){
        $nom_err = "Nom d'article incorrect";
    }else{
        $nom = $nom_ok;
    }

    $description_ok = trim($_POST["description"]);

    if(empty($description_ok)){
        $description_err = "Description d'article incorrecte";
    }else{   
        $description = $description_ok;
    }

    $quantite_ok = trim($_POST["quantite"]);

    if(empty($quantite_ok)){
        $quantite_err = "Quantité d'article incorrecte";
    }else{   
        $quantite = $quantite_ok;
    }

    $prix_ok = trim($_POST["prix"]);

    if(empty($prix_ok)){
        $prix_err = "Prix d'article incorrect";
    }else{   
        $prix = $prix_ok;
    }

    $categorie_ok = trim($_POST["categorie"]);

    if(empty($categorie_ok)){
        $categorie_err = "Catégorie d'article incorrecte";
    }else{   
        $categorie = $categorie_ok;
    }
   

    
    if(empty($nom_err) && empty($description_err)){

        $sql = "UPDATE articles SET nom=?, description=?, quantite=?, prix=?, categorie=? WHERE id=?";

        if($stmt = mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt, "issiis", $id_param, $nom_param, $description_param, $quantite_param, $prix_param, $categorie_param);
            
            $id_param = $id;
            $nom_param = $nom;
            $description_param = $description;
            $quantite_param = $quantite;
            $prix_param = $prix;
            $categorie_param = $categorie;
            

            // var_dump($roles_param);die;
            if(mysqli_stmt_execute($stmt)){
                header("location: index.php");
                exit();
            }else{
                echo "Oups, problème de connexion a la BDD, veuillez réessayer ultérieurement"; 
            }

        }
        // mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}else{

    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        $id = trim($_GET["id"]);

        $sql ="SELECT * FROM articles WHERE id=?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            $param_id = $id;

            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result)==1){
                    $row=mysqli_fetch_array($result);

                    $nom = $row["nom"];
                    $description = $row["description"];
                    $quantite = $row["quantite"];
                    $prix = $row["prix"];
                    $categorie = $row["categorie"];

                    
                }else{
                    header("location: index.php");
                    exit();
                }
            }else{
                echo "Oups, problème de connexion a la BDD, veuillez réessayer ultérieurement";
            }
            mysqli_stmt_close($stmt);

        }
        mysqli_close($link);
    }else{
        header("location: index.php");
        exit();
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mise a jour</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            background : linear-gradient(320deg,rgb(242, 113, 33),rgb(233, 64, 87),rgb(138, 35, 135));
            background-repeat : no-repeat;
            min-height: 100vh;
            font-family: 'Montserrat', sans-serif;
        }
        .wrapper{
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
                    <h2 class="mt-5">Mise à jour</h2>
                    <p>Veuillez modifier les champs souhaité et valider</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control <?php echo (!empty($nom_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nom; ?>">
                            <span class="invalid-feedback"><?php echo $nom_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control <?php echo (!empty($description_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $description; ?>">
                            <span class="invalid-feedback"><?php echo $description_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Quantité</label>
                            <input type="text" name="quantite" class="form-control <?php echo (!empty($quantite_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $quantite; ?>">
                            <span class="invalid-feedback"><?php echo $quantite_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Prix</label>
                            <input type="text" name="prix" class="form-control <?php echo (!empty($prix_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $prix; ?>">
                            <span class="invalid-feedback"><?php echo $prix_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Catégorie</label>
                            <input type="text" name="categorie" class="form-control <?php echo (!empty($categorie_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $categorie; ?>">
                            <span class="invalid-feedback"><?php echo $categorie_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../index.php" class="btn btn-secondary ml-2">Annuler</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>