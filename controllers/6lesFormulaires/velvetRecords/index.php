<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/style.css">
    <?php include 'controllers/liste.php'; ?>
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
        <?php
        $tabdisc = all_disc();
        ?>
        <h1>Liste des disques (<?= count($tabdisc) ?>)</h1>
        <div class="container">
            <div class="row">
                <?php
                foreach ($tabdisc as $disc) {
                ?>
                    <div class="col-sm-4">
                        <button class="infoDisc">
                            <!-- <button type="button" class="buttonInfo"> -->
                                <div>
                                    <img id="discPic" src="assets/img/<?= $disc->disc_picture ?>" alt="image du disque : <?= $disc->disc_title ?>">
                                </div>
                                <div>
                                    <h2 id="discTitle"><?= $disc->disc_title ?></h2>
                                    <p class="detailsListDisc">Disc N° <?= $disc->disc_id ?></p>
                                    <p class="detailsListDisc">Disc year <?= $disc->disc_year ?></p>
                                </div>
                            </button>
                        <!-- </div> -->
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>

    <footer>
    </footer>

    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>