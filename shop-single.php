<?php
  include("./php/conexion.php");
  if(isset($_GET['id'])) {
    $resultado = $conexion -> query("select * from productos where id=".$_GET['id'])or die($conexion->error);
    if(mysqli_num_rows($resultado) > 0) {
      $fila = mysqli_fetch_row($resultado);
    }else {
      header("Location: ./index.php");
    }
 } else {
   //redireccionar
   header("Location: ./index.php");
 }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  
  <body>
  
  <div class="site-wrap">

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="img/<?php echo $fila[4]; ?>" alt="<?php echo $fila[1]; ?>" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $fila[1]; ?></h2>
            <p><?php echo $fila[2]; ?></p>
            <p><strong class="text-primary h4">€<?php echo $fila[3]; ?></strong></p>
            
            <div class="mb-5">

            </div>
            <p><a href="cart.php?id=<?php echo $fila[0]; ?>" class="buy-now btn btn-sm btn-primary">Añadir al carrito</a></p>

          </div>
        </div>
      </div>
    </div>
    
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main2.js"></script>
  
   <!--<script>
   $(document).ready(function(){
    $(".btnIncrementar").click(function(){
          var precio = $(this).parent('div').parent('div').find('input').data('precio');
          var id = $(this).parent('div').parent('div').find('input').data('id');
          var cantidad = $(this).parent('div').parent('div').find('input').val();
          incrementar(cantidad, precio, id);
        });
        function incrementar(cantidad, precio, id){
          var mult = parseFloat(cantidad)* parseFloat(precio);
          $(".cant"+id).text("$"+mult);
          $.ajax({
            method: 'POST',
            url: './php/actualizar.php',
            data: {
              id:id,
              cantidad:cantidad
            }
          }).done(function(respuesta){
            
          });
        }
      });
   </script>-->
    
   </body>
</html>