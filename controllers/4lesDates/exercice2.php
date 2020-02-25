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
        // Création de la date du moment
        $datetime1 = new DateTime('now');
        //Création d'un objet date avec une date précise
        $datetime2 = new DateTime('25-09-2020');
        // Calcul de la différence avec les deux dates
        $interval = $datetime1->diff($datetime2);
        // Retourne le nombre de jour restant
        return $interval->format('Il reste %a jours');
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