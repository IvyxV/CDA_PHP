<?php
$title = basename("/exercice3.php", ".php");
include '../../views/header.php';
?>
<main>
    <h1>Boucles : exercice 3</h1>
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <?php
                $i = 0;
                $j = 0;
                while ($j < 12) {
                ?>
                // Entête du taleau
                    <th scope="col" class="textAlign"><?= $j ?></th>
                <?php
                    $j++;
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // corps du tableau
            $j = 0;
            while ($i++ < 12) {
            ?>
                <tr>
                    <?php
                    while ($j++ < 12) {
                    ?>
                        <td scope="row" class="textAlign"><?= ($i * $j) ?></td>
                    <?php
                    }
                    $j = 0;
                    ?>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</main>

<?php
include '../../views/footer.php';
?>