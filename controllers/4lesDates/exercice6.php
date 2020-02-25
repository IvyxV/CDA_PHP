<?php
$title = basename("/exercice6.php", "php");
include '../../views/header.php';
?>
<main>
    <h1>Dates</h1>
    <article>
        <h2>Partie 6</h2>
        <h3>Ajoutez 1 mois à la date courante.</h3>
    </article>
    <?php
    function dateEx6()
    {
        //Création de la date
        $heureCourante = new DateTime('2020:12:25');
        //Ajoute un mois
        $heureCourante->add(new DateInterval('P1M'));
        //Retour de la date avec le bon format
        return $heureCourante->format('d/m/Y');
    }
    $reponse = dateEx6();
    ?>
    <article>
        <h3>Résultat : </h3>
        <p><?= $reponse ?></p>
    </article>
</main>
<?php
include '../../views/footer.php';
?>