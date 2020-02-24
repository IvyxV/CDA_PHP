<?php
$title = basename("/exercice1.php");
include '../../views/header.php';
//Création tab associatif
$mois["Janvier"] = 31;
$mois["Février"] = 28;
$mois["Mars"] = 31;
$mois["Avril"] = 30;
$mois["Mai"] = 31;
$mois["Juin"] = 30;
$mois["Juillet"] = 31;
$mois["Aout"] = 31;
$mois["Septembre"] = 30;
$mois["Octobre"] = 31;
$mois["Novembre"] = 30;
$mois["Décembre"] = 31;
?>
<main>
    <h1>Tableaux : exercice 1</h1>
    <h2>Partie 1</h2>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Mois</th>
                <th scope="col">Nombre de jour</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //affichage tab associatif
            //attribution de 'variable' pour les valeurs et les clés du tableau
            foreach ($mois as $cle => $valeur) {
            ?>
                <tr>
                    <td scope="row"><?= $cle ?></td>
                    <td scope="row"><?= $valeur ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    //tri par valeur pas par clés
    asort($mois);
    ?>
    <h2>Partie 2</h2>
    <p>affichage tab associatif trié par nombre de jour croissant</p>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Mois</th>
                <th scope="col">Nombre de jour</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //affichage tab associatif
            //attribution de 'variable' pour les valeurs et les clés du tableau
            foreach ($mois as $cle => $valeur) {
            ?>
                <tr>
                    <td scope="row"><?= $cle ?></td>
                    <td scope="row"><?= $valeur ?></td>
                </tr>
            <?php
            }
            ?>
             </tbody>
    </table>
</main>
<?php
include '../../views/footer.php';
?>