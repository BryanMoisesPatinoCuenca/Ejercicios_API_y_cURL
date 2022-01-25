<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> API DE GOOGLE </title>
  </head>
  <body>

    <form class="" action="" method="">
        <label for="direccion"></label>
        <input type="text" name="direccion" value="">
        <button type="submit" name="button">Enviar</button>
    </form>

  </body>
</html>


<?php


if (isset($_GET['direccion']))
{
  $direccion = $_GET['direccion'];
  //echo "la direccion es : ".$direccion;

  $url = "https://cat-fact.herokuapp.com/facts/".$direccion ;
  $json= file_get_contents($url);
  $datos=json_decode($json,true);
  $id = $datos[0]["_id"];
  $usr = $datos[0]["user"];
  $tx = $datos[0]["text"];

  echo "El id es: ".$id;
  echo "<br>" ;
  echo "El user es: ".$usr;
  echo "<br>" ;
  echo "El texto es: ".$tx;
}


 ?>
