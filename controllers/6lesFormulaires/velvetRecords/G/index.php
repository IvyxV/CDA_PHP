<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>CRUD PHP</title>
</head>

<body>
    <div class="container">
        <header>

            <!-- require_once appelle process.php afin de traiter les requêtes SQL !-->
            <?php require_once 'process.php';
            echo $a;
            // SI il y a un message à afficher, création d'une div dont la class dépendra de l'action effectuée
            if (isset($_SESSION['message'])) : ?>

                <div class="alert alert-<?= $_SESSION['msg_type'] ?>">

                    <?php
                    //Echo affichera dans la div le message associé à l'action, unset le remet à zéro
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                </div>
                <!-- fin du if !-->
            <?php endif ?>
        </header>




        <!-- Appel de la base de données, si il n'y a pas de réponses l'erreur est indiquée
            la variable résult contient toute la table data !-->
            <?php include "../../PHP/view/header.php";?>
        <?php
        $result = $mysqli->query("SELECT * FROM data"); ?>


        <!--Formulaire qui à la validation envoie les données vers process.php-->
        <div class="row mt-4">
        <h1 class="text-white justify-content-center"> Ajouter un disque </h1>
            <form class="form-row bg-dark col-12" action="process.php" method="post" enctype="multipart/form-data">
           
                <!-- on cache l'input de l'ID puisqu'il s'auto-incrémente dans la table SQL, il sert juste lors de la modification/suppresion!-->
                <input type="hidden" disc_name="id" value="<?= $id ?>">


                <div class="col-sm">
                    <label>Nom du disque</label>
                    <!-- la valeur de l'input correspondra à la variable name et disc_year !-->
                    <input type="text" name="disc_name" class="form-control" value="<?= $disc_name; ?>" placeholder="Enter le nom du disque">
                </div>
                <div class="col-sm">
                    <label>Date de sortie</label>
                    <input type="text" name="disc_year" class="form-control" value="<?= $disc_year; ?>" placeholder="Année de sortie">
                </div>
                <div class="col-sm">
                    <label>Label</label>
                    <input type="text" name="disc_label" class="form-control" value="<?= $disc_label; ?>" placeholder="Enter your disc_year">
                </div>
                <div class="col-sm">
                    <label>Genre musical</label>
                    <input type="text" name="disc_genre" class="form-control" value="<?= $disc_genre; ?>" placeholder="Enter your disc_year">
                </div>
                <div class="col-sm">
                    <label>Prix</label>
                    <input type="text" name="disc_prix" class="form-control" value="<?= $disc_prix; ?>" placeholder="Entrez le prix">
                </div>
                <div class="col-sm">
                    <label>Image</label>
                    <input type="file" name="disc_image" class="form-control">


                    <div class="row">
                        <!-- update devient true lorsqu'on clique sur "Edit", sinon c'est le bouton save!-->
                        <?php
                        if ($update == true) :
                        ?>
                            <button type="submit" class="btn btn-info" name="update">Update</button>
                        <?php else : ?>
                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>


        <!-- Remplissage du tableau avec les données contenues dans la table SQL!-->
        <div class="row justify-content-center bg-dark mt-2">
            <!-- TANT QUE le fetch_assoc de result découle sur une information, on ajoute des cases au tableau !-->
            <?php
            while ($row = $result->fetch_assoc()) : ?>
                <div class="col-4 container-fluid mt-4 pt-3 pb-3 bg-dark ">

                    <img class="img-thumbnail bg-dark" src="<?= $row['disc_image']; ?>">
                    <div class="bg-dark d-flex flex-column bd-highlight justify-content-center">

                        <div class="text-white bd-highlight "><?= $row['disc_name']; ?> - <?= $row['disc_year']; ?></div>
                        <div class="text-white bd-highlight"><?= $row['disc_label']; ?></div>
                        <div class="text-white bd-highlight"><?= $row['disc_genre']; ?></div>
                        <div class="text-white bd-highlight"><?= $row['disc_prix']; ?></div>
                        <div class="row">
                            <div class="col-sm"> 
                                <a href="index.php?edit=<?= $row['id']; ?>" title="bouton d'edition" alt="bouton d'edition" class="btn btn-info mb-3">Edit</a>
                            </div>
                            <div class="col-sm">
                                <a href="process.php?delete=<?= $row['id']; ?>" title="bouton de suppression" alt="bouton de supression" class="btn btn-danger ">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile ?>

        </div>
        <?php pre_r($result->fetch_assoc());
        function pre_r($array)
        {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        ?>
    </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>