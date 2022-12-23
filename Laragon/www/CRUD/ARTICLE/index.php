<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body{
            background : linear-gradient(320deg,rgb(242, 113, 33),rgb(233, 64, 87),rgb(138, 35, 135));
            background-repeat : no-repeat;
            min-height: 100vh;
            font-family: 'Montserrat', sans-serif;
        }
        .wrapper {
            width: 700px;
            margin: 0 auto;
        }

        table{
            background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(5px);
            border-radius: 15px;
            box-shadow: 0px 0.4px 30px rgba(0, 0, 0, 0.5);
        }

        table tr td:last-child {
            width: 120px;
        }

        /* .td{
            display:block;
            width: 120px;
        } */

    </style>
</head>

<body>
    <h1 class="text-center">Tableau de bord</h1>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="container-fluid mt-5 mt-3 p-0 clearfix">
                    <h2>Articles</h2>
                    <a href="articles/create.php" class="btn btn-success pull-right"><i class="fa fa-plus">Nouvel article</i></a>
                </div>
                <!-- inclure fichier connexion BDD -->
                <?php

                require_once "php/config.php";

                $sql = "SELECT * FROM articles";

                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table class="table table-borderless table-striped m-3">';
                            echo '<thead>';
                                echo '<tr>';
                                    echo '<th>ID</th>';
                                    echo '<th>Nom</th>';
                                    echo '<th>Description</th>';
                                    echo '<th>Quantité</th>';
                                    echo '<th>Prix</th>';
                                    echo '<th>Catégorie</th>';
                                echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                                while ($row = mysqli_fetch_array($result)) {
                                    echo '<tr>';
                                        echo '<td>' . $row["id"] . '</td>';
                                        echo '<td>' . $row["nom"] . '</td>';
                                        echo '<td>' . $row["description"] . '</td>';
                                        echo '<td>' . $row["quantite"] . '</td>';
                                        echo '<td>' . $row["prix"] . '</td>';
                                        echo '<td>' . $row["categorie"] . '</td>';
                                        echo '<td>';
                                            echo '<a href="articles/read.php?id=' . $row["id"] . '"class="mr-3" title="vue"
                                            data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="articles/update.php?id=' . $row["id"] . '"class="mr-3" title="mise à jour"
                                            data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="articles/delate.php?id=' . $row["id"] . '"class="mr-3" title="supprimer"
                                            data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo '</td>';
                                    echo '</tr>';
                                }
                            echo '<tbody>';
                        echo '</table>';
                        // libère la mémoire
                        mysqli_free_result($result);
                    }
                    else{
                        echo "Oups, pas d'enregistrement trouvé, veuillez réessayer ultérieurement";
                    }
                }
                else{
                    echo "Oups, pas de connexion à la BDD, veuillez réessayer ultérieurement";
                }
                mysqli_close($link);


                ?>
            </div>
        </div>
    </div>
</body>

</html>