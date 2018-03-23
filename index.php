<!DOCTYPE html>
<html>
<head>
  <title>BD_PAG_3</title>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="author" content="Mauricio García" />
  <script src="script/jquery.js"></script>
	<script type="text/javascript" src="script/jquery.min.js"></script>
  <script type="text/javascript" src="script/jquery-ui.min.js"></script>

  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

  <header >
    <img class="logo-fesc" align="left" src="img/logo_fesc.png">
      <div class="header-cont">
        <h4>UNIVERSIDAD NACIONAL AUTONOMA DE MEXICO</h4>
        <h6>FACULTAD DE ESTUDIOS SUPERIORES CUAUTITLAN</h6>
      </div>
      <img class="logo-unam" align="right" src="img/unam.png">
  </header>

  <nav class="content-nav" >
    <li onclick="accion()">Acción</li>
    <li onclick="suspenso()">Suspenso</li>
    <li onclick="ficcion()">Ficcion</li>
  </nav>

  <!-- Contenedor-->
<div class="content" >
  <section>
    <p>Peliculas</p>
      <div id="cont" class="cont">
      </div>
  </section >
  <aside id="contt">

  </aside>

</div>
<footer >

</footer>


<script>

function accion(){
	document.getElementById("cont").innerHTML="";
  document.getElementById("contt").innerHTML="";
	$.ajax({
		type: "POST",
		url: "accion.php",
		data: "tipo=1",
		success: function(html){
			$("#cont").append(html);
		}
	});
}

function suspenso(){
  document.getElementById("cont").innerHTML="";
  document.getElementById("contt").innerHTML="";
  $.ajax({
  	type: "POST",
  	url: "accion.php",
  	data: "tipo=2",
  	success: function(html){
  		$("#cont").append(html);
  	}
  });
}

function ficcion(){
  document.getElementById("cont").innerHTML="";
  document.getElementById("contt").innerHTML="";
  $.ajax({
    type: "POST",
    url: "accion.php",
    data: "tipo=3",
    success: function(html){
      $("#cont").append(html);
    }
  });
}

function selPeli(a,b){
  document.getElementById("contt").innerHTML="";
  $.ajax({
    type: "POST",
    url: "accion.php",
    data: "tipo=4&a="+a+"&b="+b,
    async: false,
    success: function(html){
      $("#contt").append(html);
    }
  });
}

</script>
</body>
</html>
