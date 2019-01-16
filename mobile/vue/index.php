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
				<a class="navbar-brand logo" href="#"><img src="img/logo.png"></a>
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
  		<div class="container ">
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse  justify-content-center" id="navbarSupportedContent">
			    <ul class="navbar-nav">
			      	<li class="nav-item dropdown"><a class="nav-link" href="#" id="navbarDropdown">Actualités</a>
				        <div class="dropdown-content">
				          	<a class="dropdown-item" href="#">Dernières actualités</a>
				          	<a class="dropdown-item" href="#">Autres actualités</a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="#">Toutes les actualités</a>
				        </div>
			      	</li>		   

			      	

			      	<li class="nav-item dropdown"><a class="nav-link" href="#" id="navbarDropdown">Téléphones</a>
				        <div class="dropdown-content">
				          	<a class="dropdown-item" href="#">Nouveaux mobiles</a>
				          	<a class="dropdown-item" href="#">Les marques</a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="#">Tous les téléphones</a>
				        </div>
			      	</li>

			      	<li class="nav-item dropdown"><a class="nav-link" href="#" id="navbarDropdown">Forfaits Mobile</a>
				        <div class="dropdown-content">
				          	<a class="dropdown-item" href="#">Les promotions du moment</a>
				          	<a class="dropdown-item" href="#">Forfaits sans engagement</a>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="#">Tous les forfaits mobiles</a>
				        </div>
			      	</li>

			      	<li class="nav-item dropdown">
			      		<a class="nav-link" href="#" id="navbarDropdown">Bons plans</a>
			      	</li>

			      			      	
			      	<li class="nav-item dropdown">

			      		<a class="nav-link" href="#" id="navbarDropdown">
			      			<span>Votre compte</span></a>
				        <div class="dropdown-content">
				          	<a class="dropdown-item" href="connexion.php"><h4 class="iden">Identifiez-vous</h4></a>
				          	<div class="cpt"><small>Nouveau client?</small>&nbsp;&nbsp;<a href="inscription.php">Commencer ici</a></div>
				          	<div class="dropdown-divider"></div>
				          	<a class="dropdown-item" href="#">Votre compte</a>
				          	<a class="dropdown-item" href="#">Vos commandes</a>
				          	<a class="dropdown-item" href="#">Gérer vos abonnements</a>
				          	<a class="dropdown-item" href="#">Votre liste d'envies</a>
				          	<a class="dropdown-item" href="#">Vos recommandations</a>
				        </div>
			      	</li>


			      	<li class="nav-item dropdown">
			      		<a class="nav-link paniera" href="#" id="navbarDropdown">
			      			<img class="panier" src="img/pan.png" alt="">
			      			<span>Panier</span>
			      		</a>				       
			      	</li>				      
			    </ul>
			    
		  	</div>
  		</div>
	</nav>
	<!-- end menu -->


	<!-- slide -->
	<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		    <div class="carousel-item active">
		      	<img class="d-block w-100" src="https://via.placeholder.com/1920x530" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      	<img class="d-block w-100" src="https://via.placeholder.com/1920x530" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      	<img class="d-block w-100" src="https://via.placeholder.com/1920x530" alt="Third slide">
		    </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div>
	<!-- end slide -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 leftcont">
			<div class="dycalendar-container skin-red shadow-default"  id="calendar"></div>
			<hr>

			<div class="meteo mt-5">
				<iframe src="https://www.meteoblue.com/en/weather/widget/three/paris_france_2988507?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=image"  frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width:240px;height: 510px"></iframe>			
			</div>
			

	
			
		</div><!-- End leftcont -->
		<div class="col-md-8 midcont">
			<div class="row mt-2">
			<h2 class="list-product-title">Iphone</h2>			

			<div class="product-group">
				<div class="row">

					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/250x250" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">Xem chi tiet</a>	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/250x250" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>

						    	<h3 class="sale-sticky">Sale</h3>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->




					<!-- san pham 3 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/250x250" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 4 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/250x250" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>

						    	<h3 class="sale-sticky">Sale</h3>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->



					<!-- </div> -->


				</div><!-- end row -->
			</div><!-- end of product-group -->
		</div> <!-- end of row mt-5 -->

		<!--=========== row 2 =================-->
		<div class="row mt-5">
			<h2 class="list-product-title">Samsung</h2>			

			<div class="product-group">
				<div class="row">

					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/250x250" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>

						    	<h3 class="sale-sticky">Sale</h3>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->




					<!-- san pham 3 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 4 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>

						    	<h3 class="sale-sticky">Sale</h3>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->



					<!-- </div> -->


				</div><!-- end row -->
			</div><!-- end of product-group -->
		</div> <!-- end of row mt-5 -->
		<!-- end row 2 -->

		<!-- row 3 -->
		<div class="row mt-5">
			<h2 class="list-product-title">Sony</h2>			

			<div class="product-group">
				<div class="row">

					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->



					<!-- san pham 3 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 4 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>

						    	<h3 class="sale-sticky">Sale</h3>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->



					<!-- </div> -->


				</div><!-- end row -->
			</div><!-- end of product-group -->
		</div> <!-- end of row mt-5 -->
		<!-- end row 2 -->

		<!-- row 4 -->
		<div class="row mt-5">
			<h2 class="list-product-title">Alcatel</h2>			

			<div class="product-group">
				<div class="row">

					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->



					<!-- san pham 3 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 4 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>

						    	<h3 class="sale-sticky">Sale</h3>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->



					<!-- </div> -->


				</div><!-- end row -->
			</div><!-- end of product-group -->
		</div> <!-- end of row mt-5 -->
		<!-- end row 2 -->

		<!-- row 5 -->
		<div class="row mt-5">
			<h2 class="list-product-title">Huawei</h2>			

			<div class="product-group">
				<div class="row">

					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->



					<!-- san pham 3 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 4 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="https://via.placeholder.com/280x280" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.000vnd</span>
						    		<span class="new-price">80.000vnd</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>

						    	<h3 class="sale-sticky">Sale</h3>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->



					<!-- </div> -->


				</div><!-- end row -->
			</div><!-- end of product-group -->
		</div> <!-- end of row mt-5 -->
		<!-- end row 2 -->

		</div><!-- End MidCont -->


		<div class="col-md-2 rightcont">
			<h4>Le monde mobile</h4>
			<div class="row dsidebar">
				<ul>
					<li class="list-item liside "><a href="" class="list-link aside"><img src="img/constructeurs/alcatel.png" alt=""></a></li>
					<li class="list-item liside"><a href="" class="aside"><img src="img/constructeurs/apple.png" alt=""></a></li>
					<li class="list-item  liside"><a href="" class="aside"><img src="img/constructeurs/htc.png" alt=""></a></li>						
				</ul>

				<ul>
					<li class="list-item liside"><a href="" class="list-link aside"><img src="img/constructeurs/honor.png" alt=""></a></li>
					<li class="list-item liside"><a href="" class="aside"><img src="img/constructeurs/huawei.png" alt=""></a></li>
					<li class="list-item  liside"><a href="" class="aside"><img src="img/constructeurs/lg.png" alt=""></a></li>						
				</ul>

				<ul>
					<li class="list-item liside"><a href="" class="list-link aside"><img src="img/constructeurs/motorola.png" alt=""></a></li>
					<li class="list-item liside"><a href="" class="aside"><img src="img/constructeurs/nokia.png" alt=""></a></li>
					<li class="list-item  liside"><a href="" class="aside"><img src="img/constructeurs/samsung.png" alt=""></a></li>						
				</ul>

				<ul>
					<li class="list-item liside"><a href="" class="list-link aside"><img src="img/constructeurs/sony.png" alt=""></a></li>
					<li class="list-item liside"><a href="" class="aside"><img src="img/constructeurs/wiko.png" alt=""></a></li>
					<li class="list-item  liside"><a href="" class="aside"><img src="img/constructeurs/xiaomi.png" alt=""></a></li>						
				</ul>

				<ul>
					<li class="list-item liside"><a href="" class="list-link aside"><img src="img/constructeurs/alcatel.png" alt=""></a></li>
					<li class="list-item liside"><a href="" class="aside"><img src="img/constructeurs/apple.png" alt=""></a></li>
					<li class="list-item  liside"><a href="" class="aside"><img src="img/constructeurs/htc.png" alt=""></a></li>						
				</ul>

			</div>
	<!-- 2eme pub -->

	<hr>
	<div class="pub2 mt-5 mb-4">
		<img src="img/team1.png" alt="">
		</div>
		<hr>

		<div id="exit_ads_right"><a href="javascript:void(0)" onclick="hide_ads_right()">[X]</a></div>
		<div id="content_ads_right"><a href="index.html"><img src="img/carousel/pub1.gif" width="230px" height="280px" border="0"></a></div>
		<div id="look_ads_right"><a href="javascript:void(0)" onclick="block_ads_right()">Voir promotion</a></div>



		</div><!-- End rightCont -->







	</div><!-- End row -->
</div><!-- End Container-fluid -->

<!--  -->

<!--- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">&nbsp;</button>
  
  </div>
<!--- Connect -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Connect</h2>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g "></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>


<!--- Footer -->
	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-2">
					<h5>Actualité</h5>
					<hr class="light">
					<a href=""><p>L'actualité mobile</p></a>
					<a href=""><p>Bons plans</p></a>
					<a href=""><p>Newsletter</p></a>
					<a href=""><p>Flux RSS</p></a>
				</div>

				<div class="col-md-2">
					<h5>Tests</h5>
					<hr class="light">
					<a href="#"><p>Téléphones mobiles</p></a>
					<a href="#"><p>Prises en main</p></a>
					<a href="#"><p>Dossiers</p></a>
					<a href="#"><p>Guide d'achat</p></a>
				</div>
				
				<div class="col-md-2">
					<h5>Téléphones</h5>
					<hr class="light">
					<a href="#"><p>Mobiles &</p></a>
					<a href="#"><p>smartphones</p></a>
					<a href="#"><p>PhoneFinder</p></a>
					<a href="#"><p>Comparateur de prix</p></a>
				</div>

				<div class="col-md-2">
					<h5>Smartphones</h5>
					<hr class="light">
					<a href="#"><p>Apple iPhone</p></a>
					<a href="#"><p>Huawei</p></a>
					<a href="#"><p>Samsung</p></a>
					<a href="#"><p>Wiko</p></a>
				</div>

				<div class="col-md-2">
					<h5>Forfait mobile</h5>
					<hr class="light">
					<a href="#"><p>Sosh</p></a>
					<a href="#"><p>RED by SFR</p></a>
					<a href="#"><p>B&You</p></a>
					<a href="#"><p>Comparateur forfait</p></a>
					
				</div>

				<div class="col-md-2">
					<h5>Forum</h5>
					<hr class="light">
					<a href="#"><p>Opérateurs</p></a>
					<a href="#"><p>Téléphones mobiles</p></a>
					<a href="#"><p>Smartphones</p></a>
					<a href="#"><p>OS mobiles</p></a>
				</div>
				<div class="col-12">
					<hr class="light-100">
					<h5>Copyright &copy; 2018 vincentvn2005@gmail.com - Tous droits réservés - A propos -Contact -Recrutement -Publicité - Mentions légales</h5>
				</div>


			</div>
		</div>
	</footer>


	


	<!-- Load jquery truoc khi load bootstrap js -->
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/popper.min.js"></script>	
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/dycalendar.min.js"></script>
	<script src="bootstrap/js/fontawesomeall.js"></script>
	<script src="bootstrap/js/javascript.js"></script>
	<script>
		 dycalendar.draw({
        target:"#calendar",
        type:"month",
        highlighttoday:true
    });
	</script>
</body>
</html>