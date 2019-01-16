<?php 
	session_start();
	require('controleur/controleur.php');        
    $unControleur = new Controleur ("localhost","dbmobiles","root", "");
     $resultats=$unControleur->selectAll();

	if($_SESSION["level"]==2)
		{
			require("core/header.php");

			$page=(isset($_GET['page']))?$page=$_GET['page']:0;

			switch($page)
			{
				case 1: include("vue/list_clients.php");
				break;

				case 2: include("vue/list_assistant.php");					
				break;

				case 3: include("vue/add_assistant.php");					
				break;

				case 4: include("vue/edit_assistant.php");					
				break;

				case 5: include("vue/del_assistant.php");					
				break;

				
				

			}


		require("core/footer.php");
	}
	else{
		header("location:../index.php");
		exit();
	}
?>





	