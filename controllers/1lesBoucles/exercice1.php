<?php
$title = basename("/exercice1.php");
include '../../views/header.php';
?>
<main>
  <table>
    <thead>
      <tr>
        <th>Impaire</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $a = 1;
      while ($a < 150) {
      ?>
        <tr>
          <td id="exBou1"><?= $a ?></td>
        </tr>
      <?php
      $a +=2;
      }
      ?>
    </tbody>
  </table>
</main>
<?php
include '../../views/footer.php';
?>