<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="../../index.php"><i class="fas fa-hand-spock fa-2x"></i></a>
            <label></label>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <!-- ______________________BOUCLES_______________________________________________ -->
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les boucles </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/1lesBoucles/exercice1.php">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/1lesBoucles/exercice2.php">Exercice 2</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/1lesBoucles/exercice3.php">Exercice 3</a>
                            </div>
                        </div>
                    </li>
                    <!-- ______________________TABLEAUX_______________________________________________ -->
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les tableaux </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/2lesTableaux/exercice1.php">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/2lesTableaux/exercice2.php">Exercice 2</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/2lesTableaux/exercice3.php">Exercice 3</a>
                            </div>
                        </div>
                    </li>
                    <!-- ______________________FONCTIONS_______________________________________________ -->
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les fonctions </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/3lesFonctions/exercice1.php">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/3lesFonctions/exercice2.php">Exercice 2</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/3lesFonctions/exercice3.php">Exercice 3</a>

                            </div>
                        </div>
                    </li>
                    <!-- ______________________DATES_______________________________________________ -->
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les dates </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesDates/exercice1.php">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesDates/exercice2.php">Exercice 2</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesDates/exercice3.php">Exercice 3</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesDates/exercice4.php">Exercice 4</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesDates/exercice5.php">Exercice 5</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesDates/exercice6.php">Exercice 6</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesDates/exercice7.php">Exercice 7</a>
                            </div>
                        </div>
                    </li>
                    <!-- ______________________FICHIERS_______________________________________________ -->
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les fichiers </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/5lesFichiers/exercice1">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/5lesFichiers/exercice2">Exercice 2</a>
                            </div>
                        </div>
                    </li>
                    <!-- ______________________FORMULAIRES_______________________________________________ -->
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les formulaires </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/6lesFormulaires/exercice1.php">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/6lesFormulaires/exercice2.php">Exercice 2</a>
                            </div>
                        </div>
                    </li>
                    <!-- ______________________PDO-CRUD_______________________________________________ -->
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PDO - CRUD </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesFormulaires/exercice1">Ajout</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesFormulaires/exercice2">Détails</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesFormulaires/exercice2">Mise à jour</a>
                            </div>
                        </div>
                    </li>
                    <!-- ______________________SESSIONS_______________________________________________ -->
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les sessions </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesFormulaires/exercice1">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="../../controllers/4lesFormulaires/exercice2">Exercice 2</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>