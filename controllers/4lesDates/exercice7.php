<?php
$title = basename("/exercice7.php", "php");
include '../../views/header.php';
?>
<main>
    <h1>Dates</h1>
    <article>
        <h2>Partie 7</h2>
        <h3>Que s'est-il passé le 1000200000</h3>
    </article>
    <?php
    function dateEx7($dateInconnu)
    {
        $date = new DateTime();
        //Récupere le nombre de seconde depuis le 1er janvier 1970
        $date->setTimestamp($dateInconnu);
        return $date->format('d/m/Y H:i:s');
    }
    $reponse = dateEx7(1000200000);
    ?>
    <article>
        <h3>Résultat : </h3>
        <p><?= $reponse ?></p>
    </article>
</main>
<?php
include '../../views/footer.php';
?>