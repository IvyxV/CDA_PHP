<?php
$title = basename("/exercice4.php", "php");
include '../../views/header.php';
?>
<main>
    <h1>Dates</h1>
    <article>
        <h2>Partie 4</h2>
        <h3>Montrez que la date du 32/17/2019 est erronée</h3>
    </article>
    <?php
    function dateEx4($dateFausse)
    {
        //R2cupération de la date et changement de format
        DateTime::createFromFormat("d/m/Y", $dateFausse);
        // Récupération de la derniere érreur si il y en a une 
        $errors = DateTime::getLastErrors();
        // IS il y a au moins une erreur ou un warrning, retoune faux
        if ($errors["error_count"] > 0 || $errors["warning_count"] > 0)
            return "FAUX !";
        return "VRAI !";
    }
    $reponse = dateEx4('29/02/2021');
    ?>
    <article>
        <h3>Résultat : </h3>
        <p><?= $reponse ?></p>
    </article>
</main>
<?php
include '../../views/footer.php';
?>