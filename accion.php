<?php

// Desactivar toda notificación de error
error_reporting(0);

// Notificar solamente errores de ejecución
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Notificar E_NOTICE también puede ser bueno (para informar de variables
// no inicializadas o capturar errores en nombres de variables ...)
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Notificar todos los errores excepto E_NOTICE
// Este es el valor predeterminado establecido en php.ini
error_reporting(E_ALL ^ E_NOTICE);

// Notificar todos los errores de PHP (ver el registro de cambios)
//error_reporting(E_ALL);

// Notificar todos los errores de PHP
//error_reporting(-1);

// Lo mismo que error_reporting(E_ALL);
//ini_set('error_reporting', E_ALL);

//mi accion
if($_POST['tipo']=='1'){

  for($ciclo=1;$ciclo<=7 ;$ciclo++){
        echo '<img  onclick="selPeli('.$ciclo.','.$_POST['tipo'].')" style="height: 120px; width: 120px; margin-left:5px; margin-top:5px;" src="img/accion/accion'.$ciclo.'.jpg">';
  }

	//echo'<img id="img1" class="mujer" src="img/play.jpg">';
}
if($_POST['tipo']=='3'){
  for($ciclo=1;$ciclo<=7 ;$ciclo++){
        echo '<img onclick="selPeli('.$ciclo.','.$_POST['tipo'].')" style="height: 120px; width: 120px; margin-left:5px; margin-top:5px;" src="img/fantasia/fantasia'.$ciclo.'.jpg">';
  }

	//echo'<img id="img1" class="mujer" src="img/play.jpg">';
}

if($_POST['tipo']=='2'){
  for($ciclo=1;$ciclo<=7 ;$ciclo++){
        echo '<img onclick="selPeli('.$ciclo.','.$_POST['tipo'].')" style="height: 120px; width: 120px; margin-left:5px; margin-top:5px;" src="img/terror/terror'.$ciclo.'.jpg">';
  }
}

if($_POST['tipo']=='4'){
  $idPeli = $_POST['a'];
  $tipoPel = $_POST['b'];

  echo '<p>Sección Aside</p>';

  if ($tipoPel==1) {
    $desc = array("","", "", "", "", "", "", "", "", "", "");
    echo '<p><img style="height: 300px; width: 300px;" src="img/accion/accion'.$idPeli.'.jpg"></p>';
    echo '<p>'.$desc[$idPeli].'</p>';
  }
  if ($tipoPel==2) {
    $desc = array("","", "", "", "", "", "", "", "", "", "");
    echo '<p><img style="height: 300px; width: 300px;" src="img/terror/terror'.$idPeli.'.jpg"></p>';
    echo '<p>'.$desc[$idPeli].'</p>';
  }
  if ($tipoPel==3) {
    $desc = array("","", "", "", "", "", "", "", "", "", "");
    echo '<p><img style="height: 300px; width: 300px;" src="img/fantasia/fantasia'.$idPeli.'.jpg"></p>';
    echo '<p>'.$desc[$idPeli].'</p>';
  }
}

?>
