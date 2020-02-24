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
    function dateEx3()
    {
        return ;
    }
    $bissextile = dateEx3();
    ?>
    <article>
        <h3>Résultat : </h3>
        <p><?= $bissextile ?></p>
    </article>
</main>
<?php
include '../../views/footer.php';
?>