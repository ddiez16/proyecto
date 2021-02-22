<header>
        
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
                    <a href="#" id="enlace-equipo" class="btn-header">Tuyas</a>
                    <a href="#" id="enlace-servicio" class="btn-header">Misión</a>
                    <a href="#" id="enlace-trabajo" class="btn-header">Trabajos</a>
                    <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
                    <a href="javascript:window.open('cart.php')">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <?php

                          if(isset($_SESSION['carrito'])){
                            echo count($_SESSION['carrito']);
                          } else {
                            echo 0;
                          }
                          
                        ?>
                      </span>
                    </a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>La tienda de las TUYAS</h1>
            <h2>Proyecto Desarrollo de aplicaciones web</h2>
        </div>
</header>