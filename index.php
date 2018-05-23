<?php 
include ('inc/funciones.php');
?>
<?php 
$tituloPagina = "Inicio Market Pro";
$pagina = "inicio";
include ("inc/header.php"); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Market Tresek</h1>
        <p>Montana Colors nunca falta a su cita anual con la feria Creativeworld que se celebra el Messe Frankfurt de la misma ciudad alemana. Las últimas novedades sobre los productos MTN se han puesto en común con nuestros distribuidores y todos los interesados que acudieron a nuestro stand. Entre las novedades presentadas encontramos los expositores de columna, indispensables para el posicionamiento óptimo del producto en los puntos de venta. Aprovechamos también para present.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Leer Mas &raquo;</a></p>
      </div>
    </div>

      <!-- Destacados -->
    <div class="container">
       <div class="row">
   
      <?php 
        $x=1;
        $oferta;
        while ($x<=3 AND list($ofertas_id, $ofertas) = each($oferta)) {
          echo galeria($ofertas_id, $ofertas);
          $x++;
        }
       
      ?>
       </div>

      <hr>
        
      <!-- <footer>
        <p>&copy; Company 2015</p>
      </footer> -->
    </div> <!-- /container -->
    <?php include ("inc/footer.php"); ?> 