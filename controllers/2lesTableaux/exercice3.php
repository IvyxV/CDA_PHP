<?php
$title = basename("/exercice3.php");
include '../../views/header.php';
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
?>
<main>
    <h1>Tableaux : exercice 3</h1>
    <h2>Partie 1</h2>
    <!-- ______________________PARTIE_1_______________________________________________ -->

    <p>
        Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements
    </p>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Régions</th>
                <th scope="col">Départements</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //affichage tab associatif
            //attribution de 'variable' pour les valeurs et les clés du tableau
            //tri des clés par ordre alphabétique
            ksort($departements);
            foreach ($departements as $cle => $valeur) {
            ?>
                <tr>
                    <td scope="row">
                        <?= $cle ?>
                    </td>
                    <td scope="row">
                        <?php
                        foreach ($valeur as $nomDep) {
                        ?>
                            <?= $nomDep ?>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <h2>Partie 2</h2>
    <!-- ______________________PARTIE_2_______________________________________________ -->
    <p>
        Affichez la liste des régions suivie du nombre de départements
    </p>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Régions</th>
                <th scope="col">Nombre de départements</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //affichage tab associatif
            //attribution de 'variable' pour les valeurs et les clés du tableau
            //tri des clés par ordre alphabétique
            ksort($departements);
            foreach ($departements as $cle => $valeur) {
            ?>
                <tr>
                    <td scope="row">
                        <?= $cle ?>
                    </td>
                    <td scope="row"><?= count($valeur) ?>
                    </td>
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