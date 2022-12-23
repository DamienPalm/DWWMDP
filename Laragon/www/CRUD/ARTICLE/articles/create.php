<?php
// Include config file
require_once "../php/config.php";
 
// Define variables and initialize with empty values
$nom = $description = $quantite = $prix = $categorie = "";
$nom_err = $description_err = $quantite_err = $prix_err = $categorie_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate nom
    $input_nom = trim($_POST["nom"]);
    if(empty($input_nom)){
        $nom_err = "Veuillez entrer un nom d'article valide.";
    } else{
        $nom = $input_nom;
    }
    
    // Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Veuillez entrer une description d'article correcte.";     
    } else{
        $description = $input_description;
    }
    
    // Validate quantite
    $input_quantite = trim($_POST["quantite"]);
    if(empty($input_quantite)){
        $quantite_err = "Entrez une quantité d'article correcte.";     
    } else{
        $quantite = $input_quantite;
    }

    // Validate prix
    $input_prix = trim($_POST["prix"]);
    if(empty($input_prix)){
        $prix_err = "Entrez un prix d'article correcte.";     
    } else{
        $prix = $input_prix;
    }

    // Validate categorie
    $input_categorie = trim($_POST["categorie"]);
    if(empty($input_categorie)){
        $categorie_err = "Entrez une catégorie d'article correcte.";     
    } else{
        $categorie = $input_categorie;
    }
    
    // Check input errors before inserting in database
    if(empty($nom_err) && empty($description_err) && empty($quantite_err) && empty($prix_err) && empty($categorie_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO articles (nom, description, quantite, prix, categorie) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssiis", $param_nom, $param_description, $param_quantite, $param_prix, $param_categorie);
            
            // Set parameters
            $param_nom = $nom;
            $param_description = $description;
            $param_quantite = $quantite;
            $param_prix = $prix;
            $param_categorie = $categorie;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Quelque chose ne va pas, veuillez réessayer ultérieurement.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter</title>
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
                    <h2 class="mt-5">Création article</h2>
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
