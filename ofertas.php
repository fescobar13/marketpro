
<?php
include ('inc/funciones.php');
$tituloPagina = "Ofertas Destacadas";
$pagina = "ofertas";
include ("inc/header.php"); ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Market Tresek</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

<!-- oferta -->
<div class="container">
      <div class="row">
             <?php foreach ($oferta as $ofertas_id => $ofertas) {
	             echo galeria($ofertas_id, $ofertas);  
	       }   
	         ?>
      </div>
      <hr>
      
</div> <!-- /oferta -->

    <?php include ("inc/footer.php"); ?>