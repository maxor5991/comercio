  <?php
   require_once("class/class.php");
   $obj=new Trabajo();
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

        </nav>
         <form name='formTpv' method='post' action='https://www.sandbox.paypal.com/cgi-bin/webscr'>
                <input name="cmd" type="hidden" value="_cart">
                <input name="upload" type="hidden" value="1">
                <input name="business" type="hidden" value="advancegamingperu@gmail.com">
                <input name="shopping_url" type="hidden" value="http://localhost/mitienda/productos.php">
                <input name="currency_code" type="hidden" value="EUR">
                <input name="return" type="hidden" value="http://localhost/mi_carrito/exito.php">
                <input type='hidden' name='cancel_return' value='http://localhost/mi_carrito/errorPaypal.php'>
                <input name="notify_url" type="hidden" value="http://localhost/mi_carrito/paypalipn.php">
                <input name="rm" type="hidden" value="2">
                <input type="submit" value="PayPal SandBox">
              <?php
              $contador = 0;
              foreach($_SESSION['carro'] as $key=>$valor){
                $contador ++;
                $fi=$obj->getProductosPorId($key);
                foreach($fi as $fila){
                  $id=$fila['id'];
                  $producto=$fila['producto'];
                  $precio=$fila['precio'];
                }
                ?>
                <input name="item_number_<?php echo $contador; ?>" type="hidden" value="<?php echo $id; ?>">
                <input name="item_name_<?php echo $contador; ?>" type="hidden" value="<?php echo $producto; ?>">
                <input name="amount_<?php echo $contador; ?>" type="hidden" value="<?php echo $precio; ?>">
                <input name="quantity_<?php echo $contador; ?>" type="hidden" value="<?php echo $valor; ?>">
                <?php
              }
              ?>
            </form>
      </div>



          <?php require_once("footer.php") ?>
        

      </body>
      
    </html>