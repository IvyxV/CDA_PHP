<?php
$title = basename('/exercice1.php', 'php');
include '../../views/header.php';
$link = file('http://bienvu.net/misc/customers.csv');
?>
<main>
  <h1>Fichier : exercice 2</h1>
      
  <?php
        foreach ($link as $z) {
            explode(',', $link);
            ?>

            <tr>
                <td><?= $z ?></td>
            </tr>
            <?php
        }
        ?>
  
  <!-- <table>
        <thead>
        <tr>
            <th>Surname</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>State</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($link as $z) {
            ?>
            <tr>
                <td><?= $z ?></td>
                <td><?= $z ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table> -->
</main>
<?php
include '../../views/footer.php';
?>