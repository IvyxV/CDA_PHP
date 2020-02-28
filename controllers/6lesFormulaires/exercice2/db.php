<?php
try {
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}
$requete = $db->query("SELECT * FROM artist");
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>

<body>
    <?php foreach ($tableau as $artist) { ?>
        <div>
            <?= $artist->artist_name ?>
        </div>
    <?php
    }
    ?>
    <a href="http://localhost/lesInstructionsConditionnellesEtLesBoucles/controllers/6lesFormulaires/exercice2/details_disc.php?disc_id=7" title="pageId7" alt="lien vers infos du disque 7">lien</a>
</body>

</html>