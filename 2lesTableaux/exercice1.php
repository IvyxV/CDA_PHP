<html>

<head>

</head>

<body>
    <?php
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
    //affichage tab associatif
    echo "<table>";
    //attribution de variable pour les valeurs et les clés du tableau
    foreach ($mois as $cle => $valeur) {
        echo "<tr><td>" . $cle . "</td><td>" . $valeur . "</td></tr>";
    }
    echo '</table><br>';
    //tri par valeur pas par clés
    asort($mois);
        //affichage tab associatif trié par valeurs
    echo "<table>";
    foreach ($mois as $cle => $valeur) {
        echo "<tr><td>" . $cle . "</td><td>" . $valeur . "</td></tr>";
    }
    echo '</table>';
    ?>
    <style>
        table,
        tr,
        td {
            border: solid black 1px;
        }
    </style>
</body>

</html>