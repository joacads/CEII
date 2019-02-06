 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="es" style="font-family:Arial;">
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
	<link rel="stylesheet" type="text/css" href="ceii_bs.css"/>
	<style>
	.fondo_grisecito { background-color: #ebebeb; }
	.fondo_osc { background-color: #575656; }
	.fondo_blanco { background-color: white; }
	.fondo_azul{ background-color: #5d699d; }
	
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
		<? include ('encab_ceii.php');?>
		
			<p class="tit" style="color: #6fa97c;"> <span class="glyphicon glyphicon-stop"></span> Artículos</p>
			<br>
			<p>Ordenar por:
				<select>
					<option selected>Fecha de publicación</option>
					<option >Título, alfabáticamente</option>
					<option >Autor, alfabáticamente</option>
				</select>
			</p>
			<? for ($x=1; $x<20; $x++) {?>
			<div class="row <?if ($x>2) {echo "slideanim";}?>" style="margin-bottom:10px;">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<div class="col-sm-12 pepe anim_borde_verde" >
					<div class="row"> <!--6 foto + 6 info-->
						 <!--6 foto-->
						<div class="col-sm-4">
							<?$im=$im+1;
							if ($im==6) {$im=1;} ?>
							<img class="img-rounded" src="slide/sl-<?echo $im;?>.jpg" style="height: 100px; width: 100%;">
						</div>
						 <!--6 info-->
						<div class="col-sm-8">
							<div class="row"> <!--4 fecha + 8 titulo, debajo la bajada y bot[on-->
								<div class="col-sm-3 fecha_publ">
									01 Sep
								</div>
								<div class="col-sm-9 tit_publ">
									TÍTULO BASTANTE MÁS LARGO DE UN ARTÍCULO MÁS LARGO
								</div>
							</div>
							<p class="bajada_publ">Bajada del artículo o una muestra del texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
							<div class="der">
								<button class="btn btn-info" onclick="lee_publ(2)" >Leer</button>
							</div>
						</div>		
					</div>
					</div>
				</div> <!--fin artículo-->
				<div class="col-sm-1"></div>
			</div>
		<? } ?>
		<?include 'pie_y_modal.php';?>
	</div>

</body>