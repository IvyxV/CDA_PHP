<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <title>CRUD PHP</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Velvet Records</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> Disques </a><span class="sr-only">(current)</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artistes</a>
                    </li>
                </ul>
            </div>
        </nav>


        <!-- require_once appelle process.php afin de traiter les requêtes SQL !-->
        <?php require_once 'process.php';
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
    <div class="container">
        <!-- Appel de la base de données, si il n'y a pas de réponses l'erreur est indiquée
            la variable résult contient toute la table data !-->
        <?php
        $result = $mysqli->query("SELECT * FROM data ORDER BY disc_name"); ?>
        <!--Formulaire qui à la validation envoie les données vers process.php-->
        <div class="row">
            <?php if ($update == false) { ?>
                <h1 class="justify-content-center text-white"> Ajouter un disque </h1>
            <?php } else { ?>
                <h1 class="justify-content-center text-white"> Modifier le disque <?= $row['disc_name'] ?> </h1>
            <?php } ?>
            <form class="form-row bg-dark col-12" action="process.php" method="post" enctype="multipart/form-data">
                <!-- on cache l'input de l'ID puisqu'il s'auto-incrémente dans la table SQL, il sert juste lors de la modification/suppresion!-->
                <input type="hidden" name="id" value="<?= $id; ?>">
                <div class="row pb-3">
                    <div class="col-sm">
                        <label class="text-white">Nom du disque</label>
                        <!-- la valeur de l'input correspondra à la variable name et disc_year !-->
                        <input type="text" name="disc_name" class="form-control" value="<?= $disc_name; ?>" placeholder="Enter le nom du disque">
                    </div>
                    <div class="col-sm">
                        <label class="text-white">Date de sortie</label>
                        <input type="text" name="disc_year" class="form-control" value="<?= $disc_year; ?>" placeholder="Année de sortie">
                    </div>
                    <div class="col-sm">
                        <label class="text-white">Label</label>
                        <input type="text" name="disc_label" class="form-control" value="<?= $disc_label; ?>" placeholder="Enter your disc_year">
                    </div>
                    <div class="col-sm">
                        <label class="text-white">Genre musical</label>
                        <input type="text" name="disc_genre" class="form-control" value="<?= $disc_genre; ?>" placeholder="Enter your disc_year">
                    </div>
                    <div class="col-sm">
                        <label class="text-white">Prix</label>
                        <input type="text" name="disc_prix" class="form-control" value="<?= $disc_prix; ?>" placeholder="Entrez le prix">
                    </div>
                    <div class="col-sm">
                        <label class="text-white">Image</label>
                        <input type="file" name="disc_image" class="form-control">
                    </div>
                    <!-- update devient true lorsqu'on clique sur "Edit", sinon c'est le bouton save!-->
                    <?php
                    if ($update == true) {
                    ?>
                        <button type="submit" name="update" class=" mr-2 mt-4 btn btn-info">Modifier</button>
                    <?php } else {
                    ?>
                        <button type="submit" name="save" class="mr-2 mt-4 btn btn-primary">Sauvegarder</button>
                    <?php }
                    ?>
                </div>
        </div>
        </form>
    </div>
    <div class="row col-12 mx-auto">
        <!-- <h1 class="text-white">Liste des disques (<?= count($row) ?>)</h1> -->
        <!-- Remplissage du tableau avec les données contenues dans la table SQL!-->
        <div class="col-12 row  mx-auto justify-content-center  mt-2 pr-2">
            <!-- TANT QUE le fetch_assoc de result découle sur une information, on ajoute des cases au tableau !-->
            <?php
            while ($row = $result->fetch_assoc()) : ?>
                <div class="paddingdemort col-sm-2 case container-fluid shadow-lg p-3 mb-5 pl-1 pr-1 bg-light rounded-lg">
                    <img href="index.php?details=<?= $row['id']; ?>" class="hovertropbeau col-12 img-thumbnail mb-3" src="<?= $row['disc_image']; ?>">
                    <div class="d-flex flex-row bd-highlight justify-content-center">
                        <ul class="list-inline">
                            <li class="list-inline-item bd-highlight mr-3"><?= $row['disc_name']; ?> - <?= $row['disc_year']; ?></li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg<?= $row['id']; ?>">Détails</button>
                    </div>
                    <div class="modal fade bd-example-modal-lg<?= $row['id']; ?>" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel<?= $row['id']; ?>" aria-hidden="true">
                        <div class="modal-dialog modal-lg ">
                            <div class="modal-content">
                                <img class="col-3 img-thumbnail mb-3 justify-content-center" src="<?= $row['disc_image']; ?>">
                                <div class="modal-body">
                                    <p><?= $row['disc_name']; ?> - <?= $row['disc_year']; ?></p>
                                    <p><?= $row['disc_label']; ?></p>
                                    <p><?= $row['disc_genre']; ?></p>
                                    <p><?= $row['disc_prix']; ?></p>
                                    <a href="index.php?edit=<?= $row['id']; ?>" title="bouton d'edition" alt="bouton d'edition" class="btn btn-info mb-3">Modifier</a>
                                    <a href="process.php?delete=<?= $row['id']; ?>" title="bouton de suppression" alt="bouton de supression" class="btn btn-danger ">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        </div>
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
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>