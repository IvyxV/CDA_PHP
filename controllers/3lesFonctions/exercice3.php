<?php
$title = basename("/exercice3.php", "php");
include '../../views/header.php';
?>
<main>
    <h1>Fonctions</h1>
    <article>
        <h2>Partie 3</h2>
        <p>Créer une fonction qui vérifie le niveau de complexité d'un mot de passe</p>
    </article>
    <?php
    function complex_password($mdp)
    {
        //                      1      |         2        |       3        |      4
        return preg_match('/^(?=.{8,}$)(?=(?:.*?[A-Z]){1,})(?=.*?[a-z]){1,}(?=(?:.*?[0-9]){1,}).*$/', $mdp);
        // 1 Au moins 8 caractères au total
        // 2 Au moins 1 caractères en majuscule
        // 3 Au moins 1 caractères en minuscule
        // 4 Au moins 1 caractères en chiffre
    }
    $resultat = complex_password("TopSecret42");
    ?>
    <article>
        <h3>Résultat : </h3>
        <p><?= $resultat ?></p>
    </article>
</main>
<?php
include '../../views/footer.php';
?>