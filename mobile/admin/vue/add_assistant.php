<?php

    $error = array();
    $error["catename"] = null;
    $catename = null;
    if(isset($_POST["ok"])){
    	// check co nhap ten chuyen muc moi chua
    	if(empty($_POST["txtname"])){
    		$error["catename"]="* Xin vui long nhap ten chuyen muc moi";
    	}
    	else
    	{
    		$catename=$_POST["txtname"];
    	}

    	if($catename)
    	{
    		// mo ket noi voi csdl
    		$unControleur->setTable("category");
            $tab = array("cate_title"=>$catename);
            $unControleur->insert($tab);
    	}
    }
?>

<div class="row">
        <form action="index.php?page=3" method="post">
          <fieldset style="width:270px;margin:20px 300px 30px;">
            <div class="form-group">
              <label for="disabledTextInput">Add des catégories</label>
              <input type="text" id="disabledTextInput" name="txtnom" class="form-control" placeholder="Entrer les données" >
              <input type="text" id="disabledTextInput" name="prenom" class="form-control" placeholder="Entrer les données" >
              <input type="text" id="disabledTextInput" name="txtname" class="form-control" placeholder="Entrer les données" >
              <input type="text" id="disabledTextInput" name="txtname" class="form-control" placeholder="Entrer les données" >
              <input type="text" id="disabledTextInput" name="txtname" class="form-control" placeholder="Entrer les données" >
            </div>
            <button style="margin-top:-10px;" type="submit" name="ok" class="btn btn-primary">Addition</button>
            
          </fieldset>
        </form>       
			
	</div>







	<div style ="width:290px; margin:10px auto;text-align:center;color:#F00">
		<?php
			echo $loi["catename"];
		?>
	</div>

