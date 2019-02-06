 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8');

?>
<?include('tarjeta.txt'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<? $tit='Consultoría';?>
	<?require 'common.php';?>
	<link rel="stylesheet" type="text/css" href="/css/consultoria.css"/>
	<style>
		.cursogrado li {margin-bottom: 10px;}
	</style>
</head>
<body class="fondo_grisecito">


<div class="container" style="max-width:1024px;">
	<div class="row">
		
		<? require ('encab_ceii.php');?>
		<? require ('datos/datos_consultoria.php');?>
		<div class="linea_corta slideanim"></div>
		<?foreach ($i as $item) {?>

			<?if ($item['tipo']=='n') {?>
				<div class="div_texto slideanim sombrasiempre">
					<p class="texto_ano"><?=$item['ano'];?></p>
					<p class="texto_n "><?=$item['texto'];?></p>
				</div>
			<?} else {?>
				<div class="div_texto_r">
					<div class="tit_res slideanim sombrasiempre">RESUMEN</div>
					<div class="texto_r slideanim"><?=$item['texto'];?></div>			
					<div class="texto_r2"><?=$item['texto'];?></div>	
				</div>
			<?}?>
			<?if ($item['texto'] !== $i[ count($i)-1 ]['texto'] ) {?><div class="linea slideanim"></div><?}?>
		<?}?>
	</div>
<?
	$sig=array("Libros","publicaciones/libros.php");
	include 'siguiente.php';?>		
</div>
<?include 'pie_y_modal.php';?>
</body>
</html>