 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8'); ?>
<?include('../tarjeta.txt'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<? $tit='Integrantes';?>
	<?require '../common.php';?>
 	<link rel="stylesheet" type="text/css" href="/css/flip_manual.css?v=2406"/>
</head>
<body class="fondo_grisecito">


<div class="container" style="max-width:1024px;">
	<? include ('../encab_ceii.php');?>
	<? include ('../datos/datos_integrantes.php');?>
	
	<p class="tit tit_con_borde" style="color: #d28d14;"><span class="glyphicon glyphicon-stop"></span> Comité ejecutivo</p>
	<div id="ce" class="row row_centrada">
		<?
		foreach ($ce as $persona) {
				muestraIntegrante ($persona,'ce');
		}
		?>
	</div>
	<br><br>
	<p class="tit tit_con_borde" style="color: #8790d2;"><span class="glyphicon glyphicon-stop"></span> Consejo asesor</p>
	<div id="ca" class="row row_centrada">
		<?
		foreach ($ca as $persona) {
				muestraIntegrante ($persona,'ca');
		}
		?>
	</div>
<?
$sig=array("Posgrado","../docencia/posgrado.php");
include '../siguiente.php';?>
	
</div>
<script src="scroll.js"></script>
<?include '../pie_y_modal.php';?>
<script>
	function girar(id) {
		
		$('#flip_' + id).toggleClass('flipped');
		$('.flipped').mouseleave(function () {
			$('#flip_' + id).removeClass('flipped');
		});
	}
</script>
<script src="/scroll.js"/>
</body>
</html>

<?
	function muestraIntegrante($persona,$grupo) {?>
		<!--comienza ficha <?=$persona['nombre'];?>-->
		<div class="col col-md-4 col-sm-6 col-xs-12 ficha col_centrada">
			<div id="flip_<?=$persona['id'];?>" class="flip"> 
				<div class="card pepe slideanim sombrafoco"> 
					<div class="face front centro" style="margin: 0 !important;"> 
						<img class="ficha_img" src="/img/fotos_integrantes/mini/<?=$persona['foto'];?>">
						<p class="ficha_nombre"><?=$persona['nombre'];?></p>
						<p class="ficha_sub"><?=$persona['sub'];?></p>
						<div class="centro">
							<!--<a class="btn btn-sm btn-success" title="contactar">
								<span class="glyphicon glyphicon-envelope"></span>
							</a>-->
							<a class="btn btn-sm btn-info" title="más información" onclick="girar('<?=$persona['id'];?>');">
								<span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;VER C.V.
							</a>
						</div>						
					</div> 
					<div class="face back"> 
						<p class="ficha_nombre <?=$grupo;?>"><?=$persona['nombre'];?></p>
						<p class="ficha_sub"><?=$persona['sub'];?></p>
						<div class="ficha_info_full">
							<p class="ficha_info p14"><?=$persona['info'];?></p>
						</div>
					</div> 
				</div> 
			</div> 	
		</div> 
<?}?>		