<?php
    $id = $_GET["id"];
    $unControleur->setTable("Assistant");
        $where    = array("idAss"=>$id);
        $resultat = $unControleur->delete($where);        
        // header("location:index.php?page=2");
        // exit();
?>