<html>

<body>
    <?php
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

    //Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
    ksort($capitales);
    echo "<table>";
    foreach ($capitales as $cle => $valeur) {
        echo "<tr><td>" . $cle . "</td><td>" . $valeur . "</td></tr>";
    }
    echo '</table><br>';

    //Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.
    asort($capitales);
    echo "<table>";
    foreach ($capitales as $cle => $valeur) {
        echo "<tr><td>" . $valeur . "</td><td>" . $cle . "</td></tr>";
    }
    echo '</table><br>';
    //Affichez le nombre de pays dans le tableau.
    echo '<p>' . sizeof($capitales) . '</p>';
    //Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.
    ksort($capitales);
    echo "<table>";
    //preg_grep("[^B]", $cle);
    foreach ($capitales as $cle => $valeur) {
        echo "<tr><td>" . $cle . "</td><td>" . $valeur . "</td></tr>";
    }
    echo '</table><br>';
    echo '<p>' . sizeof($capitales) . '</p>';
    ?>
</body>

</html>