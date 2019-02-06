 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8');?>
<?include('tarjeta.txt'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<? $tit='Inicio';?>
	<?require 'common.php';?>
	<link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">
	<style>
		h3 { font-family:'Raleway', sans-serif; font-size:80px;}
	</style>
	<script>
		$(window).scroll(function() {
			$(".slideanim").each(function(){
				var pos = $(this).offset().top;

				var winTop = $(window).scrollTop();
				if (pos < winTop + 600) {
					$(this).addClass("slide-h");
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
<body class="fondo_grisecito">


<div class="container" style="max-width:1024px;">
	<? include ('encab_ceii.php');
	$texto=array("","Democracia","Innovación","Gobernabilidad","Cuidadanía");
	?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin: 0 15px; width: 96%;">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<? for ($x=1;$x<=4;$x++) {?>
				
			<div class="item <?if ($x==1) {echo 'active';}?>">
				
				<img src="/img/slide/sl<?echo $x;?>.jpg" alt="Foto de muestra">
				
				<div class="carousel-caption">
					<div style="background: rgba(54, 25, 25, .5);">
						<h3><?echo $texto[$x];?></h3>
					</div>
				</div>
			</div>
			<?}?>
		</div>

		<!-- carr:controles de izq y der -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span> 
		</a>
	</div>

	<!--QUIENES SOMOS-->
	<div class="row smh">
		<p class="tit" style="color: #6fa97c;"> <span class="glyphicon glyphicon-stop"></span> ¿Qué es el CEII?</p>
		<p>El CEII fue creado originalmente con la denominación de Centro de Estudios sobre Innovación Institucional para la Gobernabilidad Democrática en octubre de 2002, por resolución n° 205/02 del Consejo Directivo de la Facultad de Ciencias Políticas y Sociales de la UNCuyo</p>
	</div>
	<a href="institucional/quienes_somos.php">
		<div class="cierre_tema slideanim grow_poco" style="background-color:#6fa97c;">
			Leer más sobre el CEII
		</div>
	</a>	
	
	<!-- ARTICULOS-->
	<div class="row smh">
		<p class="tit" style="color: #6fa97c;"> <span class="glyphicon glyphicon-stop"></span> Artículos</p>
		<? for ($x=1; $x<3; $x++) {?>
		<div class="col-sm-6">
			<div class="col-sm-12 pepe anim_borde_verde">
			<div class="row"> <!--6 foto + 6 info-->
				 <!--6 foto-->
				<div class="col-sm-6">
					<img class="img-rounded" src="img/slide/sl<?echo $x;?>.jpg" style="height: 100px; width: 100%;">
				</div>
				 <!--6 info-->
				<div class="col-sm-6">
					<div class="row"> <!--4 fecha + 8 titulo, debajo la bajada y bot[on-->
						<div class="col-sm-4 fecha_publ">
							01 Sep
						</div>
						<div class="col-sm-8 tit_publ">
							TÍTULO DE UN ARTÍCULO
						</div>
					</div>
					<p class="bajada_publ">Bajada del artículo o una muestra del texto (...)</p>
					<button class="btn btn-info" onclick="lee_publ(2)" >Leer</button>
				</div>		
			</div>
			</div>
		</div> <!--fin artículo-->
		<? } ?>
	</div>
	
	<a href="articulos.php">
		<div class="cierre_tema slideanim grow_poco" style="background-color:#6fa97c;">
			Ver más artículos
		</div>
	</a>

	<!-- EVENTOS (AGENDA CULTURAL)-->
	<div class="row smh">
		<p class="tit" style="color: #d28d14;"><span class="glyphicon glyphicon-stop"></span> Agenda </p>
		
		<? for ($x=1; $x<5; $x++) {?>
		<div class="col-sm-3 slideanim">
			<div class="col-sm-12 pepe anim_borde_naranja centro"> <!--(nica col)-->
				<img class="img-circle" src="img/slide/sl<?echo $x;?>.jpg" style="height: 100px; width: 100px;">
				<p class="tit_publ">
					TÍTULO DEL EVENTO 
				</p>
				<p class="bajada_publ">Bajada del evento o una muestra del texto (...)</p>
				<button class="btn btn-info" onclick="lee_publ(2)">Más info</button>
			</div>
		</div> <!--fin evento culturla-->
		<? } ?>
	</div>
	<a>
		<div class="cierre_tema slideanim grow_poco" style="background-color:#d28d14;">
			Ver más eventos 
		</div>
	</a>
	
	<!-- NOTICIAS-->
	<div class="row smh">
		<p class="tit" style="color: #8790d2;"><span class="glyphicon glyphicon-stop"></span> Noticias</p>
		<div class="col-sm-12 pepe  "> <!--(nica col)-->
			<? for ($x=1; $x<4; $x++) {?>
				<div class="media slideanim pepe anim_borde_celeste" onclick="lee_publ(2)">
					<div class="media-left media-middle">
						<a href="#">
							<img class="media-object" src="img/slide/sl<?echo $x;?>.jpg" style="width:50px; height:50px;">
						</a>
					</div>
					<div class="media-body">
						<p style="margin-bottom: 0px;"><b>Noticia <?echo $x;?>: Título de una noticia.</b></p>
						<p>Aquí la bajada de la noticia, o parte del texto si no hubiera bajada.</p>
					</div>
				</div>
			<?}?>
		</div>
	</div>
	<a>
		<div class="cierre_tema slideanim grow_poco" style="background-color:#8790d2;"> 
			Ver más noticias
		</div>
	</a>

</div>
<?include 'pie_y_modal.php';?>
</body>
</html>