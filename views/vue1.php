<?php
include '../controllers/vue1Controller.php';
include 'header.php';
?>
<main>
    <h1><?php echo $title ?></h1>
    <table>
        <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($a as $z) {
            ?>
            <tr>
                <td><?= $z ?></td>
                <td><?= $z ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

    <form action="">
        <label for=""></label>
        <input type="text" name="" id="" <?= $a ? 'readonly' : '' ?>>
    </form>
</main>
<?php
include 'footer.php';
?>
