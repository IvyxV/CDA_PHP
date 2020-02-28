<?php
try {
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'root', '');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}
$id = 7;
$requete = $db->prepare("select * from disc where disc_id=:ids");
$requete->bindValue(':ids', $id, PDO::PARAM_INT);
$requete->execute();
$disc = $requete->fetch();
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>

<body>
    Disc N° <?= $disc->disc_id ?>
    Disc title <?= $disc->disc_title ?>
    Disc year <?= $disc->disc_year ?>
</body>

</html>