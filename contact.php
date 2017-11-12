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
	<title>Contactenos</title>
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
        <div class="content-page cover-background font-content-contact">
            <section class="contact-form-info section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-0">
                            <div class="well">
                                <h3 class="text-center" style="font-family: 'Lobster', cursive; font-size: 27px;">Dirección</h3>
                                <address>
                                  <strong>Pais:</strong> Tu país<br>
                                  <strong>Dirección:</strong> Tu dirección<br>
                                  <strong>Ciudad:</strong> Tu ciudad<br>
                                  <strong>Email:</strong> tucorreo@info.com
                                </address>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7">
                            <div class="well">
                                <h3 class="tittles-pages text-center">Más info de contacto</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta velit ducimus aut tempore blanditiis assumenda totam eius optio id minima labore natus ex ratione maxime, iusto fuga omnis dolorum libero?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-md-push-8">
                            <h2 class="tittles-pages text-center">Info pedidos</h2>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quidem ipsum atque numquam, sint odio nesciunt laborum repellat tenetur commodi beatae a, officia praesentium eius fuga illum totam veniam velit.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nam ipsum dolores ut nesciunt sequi iste vitae iusto, unde placeat veniam quis earum atque omnis optio praesentium! Officia, ipsum, neque.
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-8 col-md-pull-4">
                            <h2 class="tittles-pages text-center">Formulario de contacto</h2>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Tu nombre</label>
                                    <div class="col-sm-10">	
                                        <input type="text" class="form-control input-form-contact" placeholder="Escribe tu nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Tu Email</label>
                                    <div class="col-sm-10">	
                                        <input type="email" class="form-control input-form-contact" placeholder="Escribe tu Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Asunto</label>
                                    <div class="col-sm-10">	
                                        <input type="text" class="form-control input-form-contact" placeholder="Asunto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Tu mensaje</label>
                                    <div class="col-sm-10">	
                                        <textarea class="form-control input-form-contact" rows="3" placeholder="Escribe tu mensaje"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section> 
        </div>
    	<?php require_once("footer.php") ?>
    </div>
</body>
</html>