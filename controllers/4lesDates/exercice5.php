<?php
$title = basename("/exercice5.php", "php");
include '../../views/header.php';
?>
<main>
    <h1>Dates</h1>
    <article>
        <h2>Partie 5</h2>
        <h3>Affichez l'heure courante sous cette forme : 11h25.</h3>
    </article>
    <?php
    function dateEx5()
    {
        $heureCourante = new DateTime();
        return $heureCourante->format("G") + 1 . 'h' . $heureCourante->format("i");
    }
    $reponse = dateEx5();
    ?>
    <article>
        <h3>Résultat : </h3>
        <p><?= $reponse ?></p>
    </article>
</main>
<?php
include '../../views/footer.php';
?>