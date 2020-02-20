<?php
$title = basename("/exercice2.php");
include '../../views/header.php';
?>
<main>
    <table>
        <thead>
            <tr>
                <th>Nombre de fois</th>
                <th>La même phrase</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $a = "Je dois faire des sauvegardes régulières de mes fichiers";
            $i = 1;
            while ($i <= 500) {
            ?>
                <tr>
                    <td id="exBou2_1"><?= $i ?></td>
                    <td id="exBou2_2"><?= $a ?></td>
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