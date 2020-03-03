<?php

session_start();
/* appel de la base de données et déclaration des variables*/
$mysqli = new mysqli('localhost', 'root', 'root', 'crud') or die(mysqli_error($mysqli));
$update = false;
$disc_name = '';
$disc_year = '';
$disc_label = '';
$disc_genre = '';
$disc_prix = '';
$id = 0;
/* SI il y a une sauvegarde, la variable non et disc_year prennent les valeurs entrées */
if (isset($_POST['save'])) {

    $disc_name = $_POST['disc_name'];
    $disc_year = $_POST['disc_year'];
    $disc_label = $_POST['disc_label'];
    $disc_genre = $_POST['disc_genre'];
    $disc_prix = $_POST['disc_prix'];
    $disc_image = $_FILES['disc_image']['name'];
    $disc_image_tmp = $_FILES['disc_image']['tmp_name'];
    // Folder permet d'obtenir le chemin du fichier et le nom on la concactene avec $disc_name
    $folder = 'assets/img/local/'.$disc_name;
    // on extrait l'extension avec strrchr qui recherche tout ce qu'il y a après le point, substr extrait le résultat de la string
    $ext = substr(strrchr($_FILES["disc_image"]["name"], "."), 1);
    //move_uploaded_file déplace le fichier temporaire vers le repertoire local 
    move_uploaded_file($disc_image_tmp, $folder . '.' . $ext);
    
   
    //disc_image permet de mettre l'adresse et le nom du fichier et l'extension 
    $disc_image = $folder . '.' . $ext;
    $mysqli->query("INSERT INTO data (disc_name, disc_year, disc_label, disc_genre, disc_prix, disc_image)
    VALUES ('$disc_name','$disc_year','$disc_label','$disc_genre','$disc_prix', '$disc_image')") or
        die($mysqli->error);
    // $_SESSION permet d'écrire du contenu dans la balise d'alerte dans index.php
    $_SESSION['message'] = "Record has been saved";
    $_SESSION['msg_type'] = "success";
    // header renvoie vers index.php
    header("location: index.php");
}
// SI le bouton delete est cliqué, on supprime de la table SQL l'ID concerné par la suppression 
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($msqli->error());

    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "danger";
    header("location: index.php");
}
// SI le bouton edit est cliqué, on modifie l'ID sélectionné, update devient true et modifier le bouton save dans index.php

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($msqli->error());
    if (count($result) == 1) {
        $row = $result->fetch_array();
        $disc_name = $row['disc_name'];
        $disc_year = $row['disc_year'];
        $disc_label = $row['disc_label'];
        $disc_genre = $row['disc_genre'];
        $disc_prix = $row['disc_prix'];
        $disc_image = $_FILES['disc_image'];
        $disc_image_tmp = $_FILES['disc_image']['tmp_name'];
    }

}
// SI le bouton update est cliqué, on update les données de l'ID sélectionné 
if (isset($_POST['update'])) {
    $disc_name = $_POST['disc_name'];
    $disc_year = $_POST['disc_year'];
    $disc_label = $_POST['disc_label'];
    $disc_genre = $_POST['disc_genre'];
    $disc_prix = $_POST['disc_prix'];
    $disc_image = $_FILES['disc_image']['name'];
    $disc_image_tmp = $_FILES['disc_image']['tmp_name'];
    // Folder permet d'obtenir le chemin du fichier et le nom on la concactene avec $disc_name
    $folder = 'assets/img/local/'.$disc_name;
    // on extrait l'extension avec strrchr qui recherche tout ce qu'il y a après le point, substr extrait le résultat de la string
    $ext = substr(strrchr($_FILES["disc_image"]["name"], "."), 1);
    //move_uploaded_file déplace le fichier temporaire vers le repertoire local 
    move_uploaded_file($disc_image_tmp, $folder . '.' . $ext);
    
   
    //disc_image permet de mettre l'adresse et le nom du fichier et l'extension 
    $disc_image = $folder . '.' . $ext;

    $mysqli->query("UPDATE data SET disc_name='$disc_name', disc_year='$disc_year', disc_label='$disc_label', disc_genre='$disc_genre', disc_prix='$disc_prix', disc_image='$disc_image' WHERE id='$id'") or die($mysqli->error);
    $_SESSION['message'] = "Record has been updated";
    $_SESSION['msg_type'] = "warning";
    header('location: index.php');
}
