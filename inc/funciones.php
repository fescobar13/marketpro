
<?php

function galeria ($ofertas_id, $ofertas){

$salida = "";
$salida = $salida . '<div class="col-md-3">';
$salida = $salida . '<h2>'.  $ofertas ["nombre"] . '</h2>';
$salida = $salida . '<img src="' .  $ofertas ["imagen"] . '" alt=" ' .  $ofertas["nombre"] .  '"class="img-rounded">';
$salida = $salida . '<p>'. $ofertas["introdescriocion"] . '</p>';
$salida = $salida . '<p><a class="btn btn-danger" href="oferta.php?id=' . $ofertas_id . '">Antes ' . $ofertas['precio'] . '<strong> Ahora '. $ofertas['precioOferta'] . '</strong></a></p> </div>';

return $salida;
 
  }


$oferta = array ();
$oferta [001] = array(
  "nombre" => "Lata 1",
  "descripcion" => "NO te puedes perder esta oferta",
  "introdescriocion"=> "Vive un momento",
  "imagen" => "img/01.jpg",
  "precio" => 382,
  "precioOferta" => 59
   );
$oferta [002] = array(
  "nombre" => "Lata 2",
  "descripcion" => "NO te puedes perder esta oferta",
  "introdescriocion" => "Vive un momento",
  "imagen" => "img/02.jpg",
  "precio" => 485,
  "precioOferta" => 39
   );
$oferta [003] = array(
  "nombre"  => "Lata 3",
  "descripcion"  => "NO te puedes perder esta oferta",
  "introdescriocion" => "Vive un momento",
  "imagen"  => "img/03.jpg",
  "precio"  => 666,
  "precioOferta"  => 68
   );
$oferta [004] = array(
  "nombre"  => "Lata 4",
  "descripcion"  => "NO te puedes perder esta oferta",
  "introdescriocion" => "Vive un momento",
  "imagen"  => "img/04.jpg",
  "precio"  => 565,
  "precioOferta"  =>
   152
   );