 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8'); ?>

<!DOCTYPE html>
<html lang="es">
<head>

  
  <title>CEII - 
Centro de Estudios sobre la Innovación Institucional para la Gobernabilidad Democrática</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link rel="shortcut icon" href="images/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="css/SnackBar.css"/>
	<link rel="stylesheet" type="text/css" href="css/gral_bs.css"/>
	<style>
	</style>
	<script>
		$(window).scroll(function() {
			$(".slideanim").each(function(){
				var pos = $(this).offset().top;

				var winTop = $(window).scrollTop();
				if (pos < winTop + 600) {
					$(this).addClass("slide");
				}
			});
		});

		function AbreSnackBar(texto,color) {
			if (color=='verde') {var x = document.getElementById("snackbar");}
			if (color=='rojo')  {var x = document.getElementById("snackbar_r");}
			x.innerHTML = texto;
			x.className = "show";
			setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
			//tomado de http://www.w3schools.com/howto/howto_js_snackbar.asp
		}	
	
	</script>
</head>


<? include 'encabezado_bs.php';?>
<div class="container" style="max-width:920px;">
  <div class="row centro">
		<div class="col-sm-4">
			<h1>logo CEII</h1>
		</div>
	</div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li class="active"><a href="#">Inicio</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Quiénes somos
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
          <li><a href="#">Nuestra historia</a></li>
          <li><a href="#">Directorio</a></li>
          <li><a href="#">Nuestras oficinas</a></li> 
				</ul>
			</li>
			<li><a href="#"></a></li>
			<li><a href="#">Publicaciones</a></li> 
			<li><a href="#">Agenda</a></li> 
			<li><a href="#">Contacto</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="max-width:920px;">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
	</ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
		<? for ($x=1,x<5,x++) {?>
    <div class="item <?if ($x==1) {echo 'active';}?>">
      <img src="slide/sl-<?echo $x;?>.jpg" alt="Foto de muestra">
      <div class="carousel-caption">
        <h3>Foto de muestra <?echo $x;?></h3>
        <p>Se puede agregar textos y <a>enlaces</a> a cada imagen</p>
      </div>
    </div>
		<?}?>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
			<div id="snackbar">Some text some message..</div>
			<div id="snackbar_r">Some text some message..</div>
</body>
</html>