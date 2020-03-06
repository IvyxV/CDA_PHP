<?php
//$requete->bindValue(':ids', $id, PDO::PARAM_INT);

function cnxBDD()
{
    try {
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'root', '');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        // Creer une page d'erreur
        echo 'Erreur : ' . $e->getMessage() . '<br>';
        echo 'N° : ' . $e->getCode();
        die('Fin du script');
    }
    return $db;
}
function all_disc()
{
    $requete = cnxBDD()->prepare('SELECT disc_id, disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_name FROM disc INNER jOIN artist ON disc.artist_id = artist.artist_id ORDER BY disc_title');
    $requete->execute();
    $TabDisc = $requete->fetchAll();
    //$nbDisc = $db->query('SELECT count("disc_id") AS `nb` FROM disc');
    //$nbDisc = $nbDisc->fetch();
    return $TabDisc;
}
?>