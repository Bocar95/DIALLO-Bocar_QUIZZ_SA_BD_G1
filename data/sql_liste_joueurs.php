<?php
require_once ("fonctions.php");
$objetPdo = getConnexion($database = "bocar_inscription_joueur_quizz");

    $limit = $_POST["limit"];
    $offset = $_POST["offset"];

    $sql ="
            SELECT (`prenom`), (`nom`), (`id_joueur`) FROM inscriptions_joueur
            ORDER BY id_joueur DESC
            LIMIT {$limit}
            OFFSET {$offset}
    ";
        
    $req = $objetPdo->query($sql);
    $result = $req->fetchAll(2);

    echo json_encode($result);

?>