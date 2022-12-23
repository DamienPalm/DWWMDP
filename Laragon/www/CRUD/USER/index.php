<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .wrapper {
            width: 650px;
            margin: 0 auto;
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
                    <h2>Utilisateurs</h2>
                    <a href="users/create.php" class="btn btn-success pull-right"><i class="fa fa-plus">New User</i></a>
                </div>
                <!-- inclure fichier connexion BDD -->
                <?php

                require_once "php/config.php";

                $sql = "SELECT * FROM users";

                if ($result = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '<table class="table table-bordered table-striped">';
                            echo '<thead>';
                                echo '<tr>';
                                    echo '<th>ID</th>';
                                    echo '<th>Email</th>';
                                    echo '<th>Mdp</th>';
                                    echo '<th>Roles</th>';
                                echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                                while ($row = mysqli_fetch_array($result)) {
                                    echo '<tr>';
                                        echo '<td>' . $row["id"] . '</td>';
                                        echo '<td>' . $row["email"] . '</td>';
                                        echo '<td>' . $row["motdepasse"] . '</td>';
                                        echo '<td>' . $row["role"] . '</td>';
                                        echo '<td>';
                                            echo '<a href="users/read.php?id=' . $row["id"] . '"class="mr-3" title="vue"
                                            data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="users/update.php?id=' . $row["id"] . '"class="mr-3" title="mise à jour"
                                            data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="users/delate.php?id=' . $row["id"] . '"class="mr-3" title="supprimer"
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