<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "../php/config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM articles WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: index.php ");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: index.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suppression</title>
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
                    <h2 class="mt-5 mb-3">Suppression de l'article</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger" style="background-color: rgba(255, 255, 255, 0.4); backdrop-filter: blur(5px); box-shadow: 0px 0.4px 30px rgba(0, 0, 0, 0.5);">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p><b>Êtes-vous certain de vouloir le supprimer ?</b></p>
                            <p>
                                <input type="submit" value="Oui" class="btn btn-danger">
                                <a href="../index.php" class="btn btn-secondary">Non</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>

</body>
</html>