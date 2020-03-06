<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/style.css">
    <?php include 'controllers/liste.php'; ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span></span><i class="fas fa-sign-in-alt"></i> Inscription</a></li>
                    <li><a href="#"><span></span> Connexion</a></li>
                </ul>
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
                    <div class="col-sm-2 case">
                        <label></label>
                        <button class="infoDisc" data-toggle="modal" data-target="#exampleModalLong<?= $disc->disc_id ?>">
                            <div>
                                <img class="discPic" src="assets/img/<?= $disc->disc_picture ?>" alt="image du disque : <?= $disc->disc_title ?>">
                            </div>
                            <div>
                                <p class="discTitle"><?= $disc->disc_title ?></p>
                                <p class="detailsListDisc">Disc year : <?= $disc->disc_year ?></p>
                            </div>
                        </button>
                    </div>
                    <div id="details<?= $disc->disc_id ?>"></div>
                    <!-- _________________________Modal___<?= $disc->disc_id ?>_____________________________________________ -->
                    <div class="modal fade" id="exampleModalLong<?= $disc->disc_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle<?= $disc->disc_id ?>" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle<?= $disc->disc_id ?>"><?= $disc->disc_title ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Année de sortie : <?= $disc->disc_year ?></p>
                                    <?= $disc->disc_id ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-primary">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ____________________FIN_____Modal________<?= $disc->disc_id ?>________________________________________ -->
                <?php
                }
                ?>
            </div>
        </div>
    </main>

    <footer>
        <p>FOOTER</p>

    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/script/script.js"></script>
</body>

</html>