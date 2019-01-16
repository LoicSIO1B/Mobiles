<?php 
    $id=$_GET["id"];

    $error=array();
    $error["nomAss"] = $error["prenomAss"] = $error["telAss"] = $error["mailAss"] = $error["Salaire"] = null;
    $nomAss= $prenomAss= $telAss= $mailAss= $Salaire=null;
    if(isset($_POST["ok"]))
    {
    	// check co nhap chuyen muc chinh sua chua
    	if(empty($_POST["txtnom"]))
    		{
    			$error["nomAss"] = "* Veuillez entrer le nom de Assistant";
    		}
    		else{ $nomAss=$_POST["txtnom"];}

            if(empty($_POST["txtprenom"]))
            {
                $error["prenomAss"] = "* Veuillez entrer le nom de Assistant";
            }
            else{ $prenomAss=$_POST["txtprenom"];}

            if(empty($_POST["txttel"]))
            {
                $error["telAss"] = "* Veuillez entrer le nom de Assistant";
            }
            else{ $telAss=$_POST["txttel"];}

            if(empty($_POST["txtmail"]))
            {
                $error["mailAss"] = "* Veuillez entrer le nom de Assistant";
            }
            else{ $mailAss=$_POST["txtmail"];}

            if(empty($_POST["txtsalaire"]))
            {
                $error["Salaire"] = "* Veuillez entrer le nom de Assistant";
            }
            else{ $Salaire=$_POST["txtsalaire"];}



    		if($nomAss && $prenomAss  && $telAss  && $mailAss  && $Salaire)
    		{
    			$unControleur->setTable("Assistant");
                    $tab      = array("nomAss"=>$nomAss,"prenomAss"=>$prenomAss,"telAss"=>$telAss,"mailAss"=>$mailAss,"Salaire"=>$Salaire);
                    $where    = array("idAss"=>$id);
                    $resultat = $unControleur->update($tab,$where);

                    // header("location:admin/index.php?page=2"); 
                   // exit(); 
    		}
    }
    $unControleur->setTable("Assistant");
    $champ    = array(" * ");
    $where    = array("idAss"=>$id);
    $resultat = $unControleur->selectWhere($champ, $where);

 ?>

<div class="row">
    <form action="index.php?page=4&id=<?php echo $id; ?>" method="post">
        <fieldset style="width:270px;margin:20px 300px 30px;">
            <div class="form-group">
            <label for="disabledTextInput">Modifier la assistant</label>
            <input type="text" id="disabledTextInput" value="<?php echo $resultat['nomAss']; ?>" name="txtnom" class="form-control" >

             <input type="text" id="disabledTextInput" value="<?php echo $resultat['prenomAss']; ?>" name="txtprenom" class="form-control" >

              <input type="number" id="disabledTextInput" value="<?php echo $resultat['telAss']; ?>" name="txttel" class="form-control" >

               <input type="email" id="disabledTextInput" value="<?php echo $resultat['mailAss']; ?>" name="txtmail" class="form-control" >

                <input type="text" id="disabledTextInput" value="<?php echo $resultat['Salaire']; ?>" name="txtsalaire" class="form-control" >
            </div>
            <button style="margin-top:-10px;" type="submit" name="ok" class="btn btn-primary">Modifier</button>
            
        </fieldset>
    </form>
</div>

	