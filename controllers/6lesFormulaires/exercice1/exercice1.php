<?php
$title = basename('/exercice1.php', 'php');
include '../../../views/header.php';

?>
<p>Prénom : <?= $_REQUEST['prenom'] ?></p>
<p>Nom : <?= $_REQUEST['nom'] ?></p>
<p>Date de naissance : <?= $_REQUEST['Date'] ?></p>
<p>Sexe : <?= $_REQUEST['inlineRadioOptions'] ?></p>
<p>Code postal : <?= $_REQUEST['CodePostal'] ?></p>
<p>Ville : <?= $_REQUEST['Ville'] ?></p>
<p>Adresse : <?= $_REQUEST['Adresse'] ?></p>
<p>Email : <?= $_REQUEST['Email'] ?></p>
<p>Numéro du sujet : <?= $_REQUEST['Sujet'] ?></p>
<p>Question : <?= $_REQUEST['Questions'] ?></p>


<?php
include '../../../views/footer.php';
?>