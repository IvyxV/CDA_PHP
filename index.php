<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>demo</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="index.php"><i class="fas fa-hand-spock fa-2x"></i></a>
            <label></label>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les boucles </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="controllers/1lesBoucles/exercice1.php">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/1lesBoucles/exercice2.php">Exercice 2</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/1lesBoucles/exercice3.php">Exercice 3</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les tableaux </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="controllers/2lesTableaux/exercice1">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/2lesTableaux/exercice2">Exercice 2</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les dates </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="controllers/3lesDates/exercice1.php">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/3lesDates/exercice2.php">Exercice 2</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/3lesDates/exercice3.php">Exercice 3</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/3lesDates/exercice4.php">Exercice 4</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/3lesDates/exercice5.php">Exercice 5</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/3lesDates/exercice6.php">Exercice 6</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/3lesDates/exercice7.php">Exercice 7</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les formulaires </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="controllers/4lesFormulaires/exercice1">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/4lesFormulaires/exercice2">Exercice 2</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PDO - CRUD </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="controllers/4lesFormulaires/exercice1">Ajout</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/4lesFormulaires/exercice2">Détails</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/4lesFormulaires/exercice2">Mise à jour</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <label></label>
                            <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Les sessions </button>
                            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item bg-dark text-white" href="controllers/4lesFormulaires/exercice1">Exercice 1</a>
                                <a class="dropdown-item bg-dark text-white" href="controllers/4lesFormulaires/exercice2">Exercice 2</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Bienvenue sur ma page d'exercice PHP</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container fixed-bottom">
            <div class="row">
                <div class="col-sm-1">
                    <i class="fab fa-github"></i> </div>
                <div class="col-sm">
                    <a href="https://github.com/IvyxV" class="text-left" name="githubPerso" alt="Lien vers github">Mon Github</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a195faa540.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>