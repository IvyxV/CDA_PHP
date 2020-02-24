<?php
$title = basename("/exercice2.php", "php");
include '../../views/header.php';
?>
<main>
    <h1>Boucles : exercice 2</h1>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th class="textAlign">Nombre de fois</th>
                <th class="textAlign">La même phrase</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $a = "Je dois faire des sauvegardes régulières de mes fichiers";
            $i = 1;
            while ($i <= 500) {
            ?>
                <tr>
                    <td class="textAlign"><?= $i ?></td>
                    <td class="textAlign"><?= $a ?></td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</main>
<?php
include '../../views/footer.php';
?>