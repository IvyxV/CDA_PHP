<?php
$title = basename("/exercice1.php", "php");
include '../../views/header.php';
?>
<main>
    <h1>Dates</h1>
    <article>
        <h2>Partie 1</h2>
        <h3>Trouvez le numéro de semaine de la date suivante : 14/07/2019.</h3>
    </article>
    <?php
    function dateEx1($ex1)
    {
        $oDate =  DateTime::createFromFormat("d/m/Y", $ex1);
        return $oDate->format("z");
    }
    $oDate = dateEx1("14/07/2019");
    ?>
    <article>
        <h3>Résultat : </h3>
        <p><?= $oDate ?></p>
    </article>
</main>
<?php
include '../../views/footer.php';
?>