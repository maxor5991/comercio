<?php

 require_once("class/class.php");
 $obj=new Trabajo();
 $productos=$obj->getProductos();

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/shortcut-icon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/modernizr.js"></script>
	<script src="js/main.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="page-container">
    	<nav class="full-reset nav-phonestore">
            <?php require_once("header.php") ?>
            <i class="fa fa-bars visible-xs btn-mobile"></i>
    	</nav>
        <div class="content-page cover-background font-content-index">
            <div class="jumbotron">
              <h1 class="tittles-pages">Bienvenido a AGE</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsam quod dignissimos rerum veniam rem architecto voluptas quos facere voluptatibus molestiae odit, suscipit atque id, voluptate culpa assumenda a repellendus.
              </p>
            </div>
            <section class="OS-phones section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p class="tittles-pages">Lo mejor en computadoras para jugadores</p>
                            <br><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="content-dest">
                                <p style="font-size: 90px; text-align: center;"><i class="fa fa-steam"></i></p>
                                <h3 class="text-center">Steam</h3>
                                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe iure ea cum, quos, praesentium porro officia adipisci, deserunt asperiores dignissimos quasi non libero eum voluptate aut cumque nobis fuga. Laudantium!
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="content-dest">
                                <p style="font-size: 90px; text-align: center;"><i class="fa fa-windows"></i></p>
                                <h3 class="text-center">Windows</h3>
                                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe iure ea cum, quos, praesentium porro officia adipisci, deserunt asperiores dignissimos quasi non libero eum voluptate aut cumque nobis fuga. Laudantium!
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="content-dest">
                                <p style="font-size: 90px; text-align: center;"><i class="fa fa-twitch"></i></p>
                                <h3 class="text-center">Twitch</h3>
                                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe iure ea cum, quos, praesentium porro officia adipisci, deserunt asperiores dignissimos quasi non libero eum voluptate aut cumque nobis fuga. Laudantium!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="news-promo-content section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p class="tittles-pages">Novedades y productos</p>
                            <br><br><br>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-center">
                            <div class="content-dest">
                                <img src="assets/img/home-news.png" alt="news-icon" class="img-responsive center-box-content">
                                <h3>Noticias</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius vitae similique quos veritatis numquam fugiat fugit ea vel consectetur deserunt, provident hic nesciunt, natus soluta voluptate laudantium a possimus suscipit.
                                </p>
                                <a href="#" class="btn btn-success">Más información</a>
                                <hr class="visible-xs">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-center">
                            <div class="content-dest">
                                <img src="assets/img/home-promo.png" alt="promo-icon" class="img-responsive center-box-content">
                                <h3>Promociones</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius vitae similique quos veritatis numquam fugiat fugit ea vel consectetur deserunt, provident hic nesciunt, natus soluta voluptate laudantium a possimus suscipit.
                                </p>
                                <a href="#" class="btn btn-success">Más información</a>
                                <hr class="visible-xs">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-center">
                            <div class="content-dest">
                                <img src="assets/img/home-phones.png" alt="phone-icon" class="img-responsive center-box-content">
                                <h3>Teléfonos</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa delectus deserunt eveniet beatae repudiandae asperiores! Et facere beatae ea inventore similique molestiae fugiat ad, quos, tenetur natus est libero ducimus.
                                </p>
                                <a href="#" class="btn btn-success">Más información</a>
                                <hr class="visible-xs">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-center">
                            <div class="content-dest">
                                <img src="assets/img/home-plans.png" alt="plans-icon" class="img-responsive center-box-content">
                                <h3>Planes y precios</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa delectus deserunt eveniet beatae repudiandae asperiores! Et facere beatae ea inventore similique molestiae fugiat ad, quos, tenetur natus est libero ducimus.
                                </p>
                                <a href="#" class="btn btn-success">Más información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    	<?php require_once("footer.php") ?>
    </div>
</body>
</html>
