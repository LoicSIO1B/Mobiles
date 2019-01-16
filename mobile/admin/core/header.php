<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/dycalendar.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<!-- <link rel="stylesheet" href="fontawesome/css/all.min.css"> -->
	<title>PROJET MOBILES</title>
</head>
<body>
	<div class="container">
		<div class="row padding">

			<div class="col-md-6">
				<a class="navbar-brand logo" href="index.php"><img src="img/logo.png"></a>
			</div>
		

		<div class="col-md-6">
			<div class="search-box-wrapper">
				<select name="categorie" class="categorie" id="categorie">
					<option value="">Catégorie 1</option>
					<option value="">Catégorie 2</option>
					<option value="">Catégorie 3</option>
					<option value="">Catégorie 4</option>
				</select><input type="text" placeholder="Search..." class="search-box-input"><button class="search-box-button">&#128269;</button>
			</div>
		</div>

			
		</div>
	</div>

	<!-- End header -->
	
	<!-- menu -->

	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		<a class="navbar-brand">Tableau Admin</a>
  		<div class="container ">
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse  justify-content-center" id="navbarSupportedContent">
			    <ul class="navbar-nav">
			      	<li class="nav-item dropdown"><a class="nav-link" href="index.php?page=1" id="navbarDropdown">Clients</a>				        
			      	</li>		   

			      	

			      	<li class="nav-item dropdown"><a class="nav-link" href="#" id="navbarDropdown">Interventions</a>
				        <div class="dropdown-content">
				          	<a class="dropdown-item" href="index.php?page=2">Assistant</a>
				          	<a class="dropdown-item" href="index.php?page=10">Support</a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="#">Assurer</a>
				        </div>
			      	</li>

			      	<li class="nav-item dropdown"><a class="nav-link" href="#" id="navbarDropdown">Mobiles</a>
				        <div class="dropdown-content">
				          	<a class="dropdown-item" href="#">Produits</a>
				          	<a class="dropdown-item" href="#">Marques</a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="#">ProduitMobile</a>
				        </div>
			      	</li>

			      					
					
					<li class="nav-item dropdown"><a class="nav-link" href="#" id="navbarDropdown">Services</a>
				        <div class="dropdown-content">
				          	<a class="dropdown-item" href="#">Offres</a>
				          	<a class="dropdown-item" href="#">Forfait</a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="#">Encadrer</a>
				        </div>
			      	</li>

		      		<li class="nav-item dropdown"><a class="nav-link" href="#" id="navbarDropdown">Achat</a>
				        <div class="dropdown-content">
				          	<a class="dropdown-item" href="#">Commandes</a>
				          	<a class="dropdown-item" href="#">V_produits</a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="#">V_commandes</a>
				          	<a class="dropdown-item" href="#">V_support</a>
				        </div>
			      	</li>


					<li class="nav-item dropdown">
			      		<a class="nav-link" href="vue/deconnexion.php" id="navbarDropdown">
			      			<span>Slide</span></a>				       
			      	</li>

			      	<li class="nav-item dropdown">
			      		<a class="nav-link" href="vue/deconnexion.php" id="navbarDropdown">
			      			<span>Déconnexion</span></a>				       
			      	</li>


			    </ul>
			    
		  	</div>
  		</div>
	</nav>
	<!-- end menu -->

<div class="container-fluid bg">
