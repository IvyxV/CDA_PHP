<?php
$title = basename("/exercice3.php");
include '../../views/header.php';
?>
<main>
    <table class="table table-bordered table-dark" id="exBou3">
        <thead>
            <tr>
                <?php
                $i = 0;
                $j = 0;
                while ($j < 12) {
                ?>
                    <th scope="col" id="exBou3_1"><?= $j ?></th>
                <?php
                    $j++;
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $j = 0;
            while ($i++ < 12) {
            ?>
                <tr>
                    <?php
                    while ($j++ < 12) {
                    ?>
                        <td scope="row" id="exBou3_1"><?= ($i * $j) ?></td>
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