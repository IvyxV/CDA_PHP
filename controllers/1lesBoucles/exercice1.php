<?php
$title = basename('/exercice1.php', 'php');
include '../../views/header.php';
?>
<main>
  <h1>Boucles : exercice 1</h1>
  <table class='table table-bordered table-dark'>
    <thead>
      <tr>
        <th class='textAlign'>Impaire jusque 150</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $a = 1;
      while ($a < 150) {
      ?>
        <tr>
          <td class='textAlign'><?= $a ?></td>
        </tr>
      <?php
        $a += 2;
      }
      ?>
    </tbody>
  </table>
</main>
<?php
include '../../views/footer.php';
?>