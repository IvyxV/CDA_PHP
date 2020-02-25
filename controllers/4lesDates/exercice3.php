<?php
$title = basename("/exercice3.php", "php");
include '../../views/header.php';
?>
<main>
    <h1>Dates</h1>
    <article>
        <h2>Partie 3</h2>
        <h3>Comment déterminer si une année est bissextile?</h3>
    </article>
    <?php
    function dateEx3($annee)
    {
        // Détermination d'année bissextile ou pas 
        if (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0)
            return "Bissextile";
        else
            return "Non bissextile";
    }
    $bissextile = dateEx3(1888);
    ?>
    <article>
        <h3>Résultat : </h3>
        <p><?= $bissextile ?></p>
    </article>
</main>
<?php
include '../../views/footer.php';
?>