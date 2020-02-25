<?php
$title = basename("/exercice1.php", "php");
include '../../views/header.php';
?>
<main>
  <h1>Fonctions</h1>
  <article>
    <h2>Partie 1</h2>
    <h3>Ecrivez une fonction qui permette de générer un lien.</h3>
    <p>La fonction doit prendre deux paramètres, le lien et le titre.</p>
    <p>lien("https://www.reddit.com/", "Reddit Hug");</p>
    <p>Appelée de cette façon, la fonction doit générer</p>
    <p>
      <pre><code><\a href="https://www.reddit.com/">Reddit Hug<\/\a>.</code></pre>
    </p>
  </article>
  <?php
  //fonction qui prend 2 parametre
  function lien($lien, $titre)
  {
  ?>
    <a href="<?= $lien ?>"><?= $titre ?></a>
  <?php
  }
  //Appelle avec 2 parametre string
  lien("https://www.reddit.com/", "Reddit Hug");
  ?>

</main>
<?php
include '../../views/footer.php';
?>