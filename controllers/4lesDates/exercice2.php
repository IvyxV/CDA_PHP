<?php
$title = basename("/exercice2.php", "php");
include '../../views/header.php';
?>
<main>
    <h1>Dates</h1>
    <article>
        <h2>Partie 2</h2>
        <h3>Combien reste-t-il de jours avant la fin de votre formation.</h3>
    </article>
    <?php
    function dateEx2()
    {
        $datetime1 = new DateTime('now');
        $datetime2 = new DateTime('25-09-2020');
        $interval = $datetime1->diff($datetime2);
        return $interval->format('%R%a days');
    }
    $nbJourRestant = dateEx2();
    ?>
    <article>
        <h3>Résultat : </h3>
        <p><?= $nbJourRestant ?></p>
    </article>
</main>
<?php
include '../../views/footer.php';
?>