<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<?php
  require_once("header.php");
?>
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>C</span>liente<span>P</span>azzo</h1>
									<h2>Prezzi pazzi da ClientePazzo!</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Ordina ora!</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>C</span>liente<span>P</span>azzo</h1>
									<h2>Prodotti modici a prezzi pazzi!</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Ordina ora!</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>C</span>liente<span>P</span>azzo</h1>
						      <h2>Da ClientePazzo troverai un sacco di #robe!</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Ordina ora!</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">

        <?php
          require_once("left-sidebar.php");
        ?>
				<div class="col-sm-9 padding-right">
          <div class='row'>
            <div class="features_items"><!--features_items-->
						<h2 class="title text-center">#soloperveriPAZZI</h2>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product3.jpg" alt="" />
										<h2>€56</h2>
										<p>Easy Polo Black Edition</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>€56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product4.jpg" alt="" />
										<h2>€56</h2>
										<p>Easy Polo Black Edition</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>€56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
										</div>
									</div>
									<img src="images/home/new.png" class="new" alt="" />
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/product5.jpg" alt="" />
										<h2>€56</h2>
										<p>Easy Polo Black Edition</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>€56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
										</div>
									</div>
									<img src="images/home/sale.png" class="new" alt="" />
								</div>
							</div>
						</div>

					</div><!--features_items-->

            <div class="category-tab"><!--category-tab-->
              <div class="col-sm-12">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#vestiti" data-toggle="tab">Vestiti</a></li>
                  <li><a href="#antiquariato" data-toggle="tab">Antiquariato</a></li>
                  <li><a href="#prodottiBiologici" data-toggle="tab">Prodotti biologici</a></li>
                </ul>
              </div>

              <div class="tab-content">
                <div class="tab-pane fade active in" id="vestiti" >
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery1.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery2.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery3.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery4.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="antiquariato" >
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery4.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery3.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery2.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery1.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="prodottiBiologici" >
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery3.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery4.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery1.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/gallery2.jpg" alt="" />
                          <h2>€56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div><!--/category-tab-->

            <div class="recommended_items"><!--recommended_items-->
              <h2 class="title text-center">Prodotti raccomandati</h2>

              <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend1.jpg" alt="" />
                            <h2>€56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend2.jpg" alt="" />
                            <h2>€56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend3.jpg" alt="" />
                            <h2>€56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend1.jpg" alt="" />
                            <h2>€56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend2.jpg" alt="" />
                            <h2>€56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img src="images/home/recommend3.jpg" alt="" />
                            <h2>€56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Aggiungi al carrello</a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
              </div>
            </div><!--/recommended_items-->
          </div>

				</div>
			</div>
		</div>
	</section>

  <?php
    require_once("footer.php");
  ?>

  <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/main.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
