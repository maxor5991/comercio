<?php

   require_once("class/class.php");

   $obj=new Trabajo();
   $id=strip_tags($_GET["id"]);
   $productos=$obj->getProductosPorId($id);

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
  <!--<link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/detalle.css">-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="js/modernizr.js"></script>
  <script src="js/main.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
  <div class="page-container">
    <nav class="full-reset nav-phonestore">
      <?php require_once("header.php") ?>
      <i class="fa fa-bars visible-xs btn-mobile"></i>
    </nav>
    <div id="content">
        <?php foreach ($productos as $pro):?>
          <div id="foto_detalle">
            <img src="fotos/<?php echo $pro["name"]."big.jpg"; ?>">
          </div>
          <div id="detalles">
            <p><?php echo $pro["producto"]; ?></p>
            <p><?php echo $pro["vig"]; ?></p>
            <p><?php echo $pro["precio"]; ?></p>
            <p><?php echo $pro["empresa"]; ?></p>
            <p><?php echo $pro["idioma"]; ?></p>
            <p><?php echo $pro["edad"]; ?></p>
          </div>
          <div id="video">
            <a href="carrito.php?id=<?php echo $pro['id']; ?>&action=add">Comprar</a>
            <button onclick="add2(<?php echo $pro['id'];?>,'add');" class="btn success">Comprar</button>
            <p><?php echo $pro["video"]; ?></p>
          </div>
        <?php endforeach; ?>
    </div>
  </div>
  <div id="principal">
    <?php require_once("footer.php") ?>
    </div>
  </body>
</html>