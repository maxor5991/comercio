<img src="assets/img/agelogo.png" style="height: 50px;
width: 100px;
margin-left: 50px;
margin-top: 2px;"> 
</img>
 <div id="cart">
    <ul class="list-unstyled full-reset navigation-list" style="margin-left: 330px;
margin-top: -74px;">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="product.php">Productos</a></li>
                <li><a href="news.php">Noticias</a></li>
                <li><a href="services.php">Servicios</a></li>
                <li><a href="contact.php">Contactenos</a></li>
                <li><?php
                if (isset($_SESSION["cantidadTotal"]))
                 {
                    ?>
                    </li>
                <li><a href="carrito.php"> &nbsp; Cantidad:</a></li>
                <li><a href="carrito.php"><?php echo $_SESSION["cantidadTotal"]; ?> productos</a></li>
                <li><a href="carrito.php"> &nbsp; Valor :</a></li>
                <li><a href="carrito.php">$ <?php echo $_SESSION["totalcoste"]; ?></a></li>
             <?php
                }else{
             ?>
                <li><a>&nbsp; Cantidad: 0</a></li>
                <li><a>&nbsp; Valor: S/0.00</a></li>
          <?php } ?>
            </ul>
</div>

