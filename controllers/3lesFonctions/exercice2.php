<?php
$title = basename("/exercice2.php", "php");
include '../../views/header.php';
?>
<main>
    <h1>Fonctions</h1>
    <article>
        <h2>Partie 2</h2>
        <h3>Ecrivez une fonction qui calcul la somme des valeurs d'un tableau.</h3>
        <p>La fonction doit prendre un paramètre de type tableau</p>
        <p>$tab = array(4, 3, 8, 2);</p>
        <p>$resultat = somme($tab);</p>
        <p>$resultat doit contenir 17.</p>
    </article>
    <?php
    
    function somme($tab)
    {
        return array_sum($tab);
    }
    $tab = array(4, 3, 8, 2);
    $resultat = somme($tab);
    ?>
    <article>
        <h3>Résultat : </h3>
        <p><?= $resultat ?></p>
    </article>

</main>
<?php
include '../../views/footer.php';
?>