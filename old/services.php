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
	<title>Servicios</title>
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
        <div class="content-page cover-background font-content-services">
            <section class="all-services section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h2 class="tittles-pages">Acerca de PhoneStore</h2>
                            <i class="fa fa-tablet fa-5x"></i> &nbsp; <i class="fa fa-mobile fa-5x"></i>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem fuga quod dolores cumque in doloremque maiores velit unde mollitia praesentium, blanditiis, suscipit hic! Est eos laborum veniam ratione voluptate assumenda.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe consequuntur vero, explicabo quaerat, ipsam deleniti accusamus nobis repellendus quis praesentium, error, enim sint asperiores adipisci id veniam non suscipit neque!
                            </p>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem fuga quod dolores cumque in doloremque maiores velit unde mollitia praesentium, blanditiis, suscipit hic! Est eos laborum veniam ratione voluptate assumenda.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe consequuntur vero, explicabo quaerat, ipsam deleniti accusamus nobis repellendus quis praesentium, error, enim sint asperiores adipisci id veniam non suscipit neque!
                            </p>
                        </div>
                        <div class="col-xs-12">
                            <h2 class="text-center tittles-pages">Nuestros Servicios</h2>
                            <div class="principal-container-services">
                                <a href="#!">
                                    <p class="icon-service"><i class="fa fa-briefcase"></i></p>
                                    <p class="tittle-service">Título Servicio</p>
                                    <p class="description-service">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga dolores ea nostrum in at, sequi quae dicta praesentium ad veritatis, saepe a commodi assumenda nobis corporis voluptates officiis ipsa illo?
                                    </p>
                                </a>
                                <a href="#!">
                                    <p class="icon-service"><i class="fa fa-envelope"></i></p>
                                    <p class="tittle-service">Título Servicio</p>
                                    <p class="description-service">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga dolores ea nostrum in at, sequi quae dicta praesentium ad veritatis, saepe a commodi assumenda nobis corporis voluptates officiis ipsa illo?
                                    </p>
                                </a>
                                <a href="#!">
                                    <p class="icon-service"><i class="fa fa-wrench"></i></p>
                                    <p class="tittle-service">Título Servicio</p>
                                    <p class="description-service">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga dolores ea nostrum in at, sequi quae dicta praesentium ad veritatis, saepe a commodi assumenda nobis corporis voluptates officiis ipsa illo?
                                    </p>
                                </a>
                                <a href="#!">
                                    <p class="icon-service"><i class="fa fa-truck"></i></p>
                                    <p class="tittle-service">Título Servicio</p>
                                    <p class="description-service">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga dolores ea nostrum in at, sequi quae dicta praesentium ad veritatis, saepe a commodi assumenda nobis corporis voluptates officiis ipsa illo?
                                    </p>
                                </a>
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