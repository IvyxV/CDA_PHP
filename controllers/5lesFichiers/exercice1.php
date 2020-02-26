<?php
$title = basename('/exercice1.php', 'php');
include '../../views/header.php';
$link = file('../../assets/link/liens.txt');
?>
<main>
  <h1>Fichier : exercice 1</h1>
      <?php
      foreach ($link as $z) {
      ?>
        <ul>
          <li><?= $z ?></li>
        </ul>
      <?php
      }
      ?>
</main>
<?php
include '../../views/footer.php';
?>