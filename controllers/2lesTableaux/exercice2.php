<?php
$title = basename("/exercice1.php");
include '../../views/header.php';
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);
?>
<h1>Tableau : exercice 2</h1>
<!-- ______________________PARTIE_1_______________________________________________ -->
<article>
    <h2>Partie 1</h2>
    <p>
        Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
    </p>
</article>
<?php
ksort($capitales);
?>
<table class="table table-bordered table-dark">
    <thead>
        <tr>
            <th scope="col">Nom de la Capitale</th>
            <th scope="col">Nom du pays</th>
        </tr>
    </thead>
    <tbody>
        <?php
        //affichage tab associatif
        //attribution de 'variable' pour les valeurs et les clés du tableau
        foreach ($capitales as $cle => $valeur) {
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
<!-- ______________________PARTIE_2_______________________________________________ -->
<article>
    <h2>Partie 2</h2>
    <p>
        Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
    </p>
</article>
<table class="table table-bordered table-dark">
    <thead>
        <tr>
            <th scope="col">Nom de la Capitale</th>
            <th scope="col">Nom du pays</th>
        </tr>
    </thead>
    <tbody>
        <?php
        asort($capitales);
        foreach ($capitales as $cle => $valeur) {
        ?>
            <tr>
                <td scope="row"><?= $valeur ?></td>
                <td scope="row"><?= $cle ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<!-- ______________________PARTIE_3_______________________________________________ -->

<article>
    <h2>Partie 3</h2>
    <p>
        Affichez le nombre de pays dans le tableau.
    </p>
</article>
<table class="table table-bordered table-dark">
    <thead>
        <tr>
            <th scope="col">Nombre de pays</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row"><?= sizeof($capitales) ?></td>
        </tr>
    </tbody>
</table>
<!-- ______________________PARTIE_4_______________________________________________ -->
<article>
    <h2>Partie 4</h2>
    <p>
        Supprimer du tableau toutes les capitales ne commençant pas par la lettre 'B', puis affichez le contenu du tableau.
    </p>
</article>
<table class="table table-bordered table-dark">
    <thead>
        <tr>
            <th scope="col">Nom de la Capitale</th>
            <th scope="col">Nom du pays</th>
        </tr>
    </thead>
    <tbody>
        <?php
        ksort($capitales);
        foreach ($capitales as $cle => $valeur) {
            if (preg_match("/^B/", $cle)) {
                unset($capitales[$cle]);
            }
        }
        foreach ($capitales as $cle => $valeur) {
        ?>
            <tr>
                <td scope="row"><?= $cle ?></td>
                <td scope="row"><?= $valeur ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    <?php
    include '../../views/footer.php';
    ?>