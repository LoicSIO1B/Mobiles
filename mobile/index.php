<?php 
	session_start();
	require('controleur/controleur.php');        
    $unControleur = new Controleur ("localhost","dbmobiles","root", "");
?>

<?php require_once('core/header.php'); ?>
<!-- slide -->
	<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner">
		    <div class="carousel-item active">
		      	<img class="d-block w-100" src="img/carousel/1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      	<img class="d-block w-100" src="img/carousel/2.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      	<img class="d-block w-100" src="img/carousel/3.jpg" alt="Third slide">
		    </div>
		    <div class="carousel-item">
		      	<img class="d-block w-100" src="img/carousel/4.jpg" alt="Third slide">
		    </div>
		    <div class="carousel-item">
		      	<img class="d-block w-100" src="img/carousel/5.jpg" alt="Third slide">
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
						  	<img class="card-img-top" src="img/card/1.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">Xem chi tiet</a>	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/2.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
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
						  	<img class="card-img-top" src="img/card/3.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 4 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/4.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
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
						  	<img class="card-img-top" src="img/card/5.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/6.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
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
						  	<img class="card-img-top" src="img/card/7.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 4 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/8.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
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
						  	<img class="card-img-top" src="img/card/9.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/10.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->



					<!-- san pham 3 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/11.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 4 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/12.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
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
						  	<img class="card-img-top" src="img/card/13.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/14.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->



					<!-- san pham 3 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/15.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 4 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/16.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
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
						  	<img class="card-img-top" src="img/card/17.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 2 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/18.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->



					<!-- san pham 3 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/19.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
						    	</div>
						    	<a href="" class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
						    	<a href="" class="btn btn-outline-info btn-detail">En Détail</a>						    	
						  	</div>
						</div>
					</div><!-- end col-md-3 -->


					<!-- san pham 4 -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="card card-product mb-3">
						  	<img class="card-img-top" src="img/card/20.jpg" alt="Card image cap">
						  	<div class="card-body">
						    	<h5 class="card-title product-title">Product</h5>
						    	<div class="card-text product-price">
						    		<span class="del-price">100.00 €</span>
						    		<span class="new-price">80.00 €</span>
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

<?php require_once('core/footer.php'); ?>


	