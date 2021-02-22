<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página web completa</title>
    <link rel="stylesheet" type="text/css" href="estilos.css?ts=<?=time()?>"; />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    
    <?php
        include('./diseño/header.php');
    ?>
    
    <main>
        <section class="team contenedor" id="equipo">
            
            <h3>Nuestras tuyas</h3>
            <p class="after">¡Elige la que más te guste!</p>
            <div class="card">
    <?php
    
        include('./php/conexion.php');
        $resultado = $conexion -> query("select * from productos")or die($conexion -> error);
        while($fila = mysqli_fetch_array($resultado)) {

    ?>
                <div class="content-card">
                    <div class="people">
                        <a href="javascript:window.open('shop-single.php?id=<?php echo $fila['id'];?>')">
                        <img src="img/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>"></a>
                    </div>
                    <div class="texto-team">
                        <h4><?php echo $fila['nombre'];?></h4>
                        <p><?php echo $fila['descripcion'];?></p>
                        <p><?php echo $fila['precio'];?>€</p>
                    </div>
                </div>
                
        <?php
              }
        ?>
            </div>
            
        </section>
        
        
        
        <section class="about" id="servicio">
            <div class="contenedor">
                <h3>¿Quienes somos?</h3>
                <p class="after">Lorem ipsum dolor sit amet consectetur.</p>
                <div class="servicios">
                    <div class="caja-servicios">
                        <img src="img/heart.png" alt="">
                        <h4>Misión</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/responsive.png" alt="">
                        <h4>Visión</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/efectos.png" alt="">
                        <h4>Valores</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="work contenedor" id="trabajo">
            <h3>Nuestro trabajo</h3>
            <p class="after">Lorem ipsum dolor sit amet consectetur.</p>
            <div class="botones-work">
                <ul>
                    <li class="filter active" data-nombre='todos'>Todo</li>
                    <li class="filter" data-nombre='diseño'>Tuyas</li>
                    <li class="filter" data-nombre='programacion'>Paisajes</li>
                    <li class="filter" data-nombre='marketing'>Floras</li>
                </ul>
            </div>
            <div class="galeria-work">
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/paisaje1.jfif" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Paisaje</h4>
                    </div>
                </div>
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/paisaje2.jfif" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Paisaje</h4>
                    </div>
                </div>
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/paisaje3.jfif" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Paisaje</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/tuya1.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Tuya</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/tuya2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Tuya</h4>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/tuya3.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Tuya</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/flora1.jfif" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Flora</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/flora2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Flora</h4>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/flora3.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Flora</h4>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="contacto">
        <div class="footer contenedor">
            <div class="marca-logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="iconos">
                <a href="javascript:window.open('https://www.youtube.com/watch?v=-jhWLZZApjs');"><i class="fab fa-youtube"></i></a>
                <a href="javascript:window.open('https://www.facebook.com/');"><i class="fab fa-facebook"></i></a>
                <a href="javascript:window.open('https://bitcoin.org/es/');"><i class="fab fa-bitcoin"></i></a>
            </div>
            <p>Daniel Díez S.A - Todos los derechos reservados. 2021</p>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
    <script src="js/main2.js"></script>

</body>

</html>