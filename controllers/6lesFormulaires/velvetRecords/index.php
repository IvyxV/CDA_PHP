<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php include 'models/liste.php'; ?>
</head>

<body>
    <header>
        <nav class=" navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">VelvetRecords</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Liste</a></li>
                        <li><a href="#">Ajouter</a></li>
                        <li><a href="#">Modifier</a></li>
                        <li><a href="#">supprimer</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Inscription</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <ul>
            <?php
            $tabdisc = all_disc();
            ?>
            <h1>Liste des disques (<?= count($tabdisc) ?>)</h1>
            <?php
            foreach ($tabdisc as $nbline) {
            ?>
                <li><?= $nbline->disc_title ?></li>
            <?php
            }
            ?>
        </ul>
        <!-- <main>
        <h1>Liste des disques " <?= $nbDisc->nb ?> "</h1>
        Disc N° <?= $disc->disc_id ?>
        Disc title <?= $disc->disc_title ?>
        Disc year <?= $disc->disc_year ?> -->

    </main>
</body>

</html>