 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8'); ?>
<?include('../tarjeta.txt'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<? $tit='Programas y Proyectos';?>
	<?require '../common.php';?>
 	<link rel="stylesheet" type="text/css" href="/css/docencia.css"/>
	<style>
		.cursogrado li {margin-bottom: 10px;}
	</style>

</head>
<body class="fondo_grisecito">


<div class="container" style="max-width:1024px;">
	<? require ('../encab_ceii.php');?>
	<? require ('../datos/datos_programas.php'); 

	foreach ($titPr as $id => $t) {?>
	
		<div class="pepe anim_borde_celeste slideanim cursogrado">
			<div class="cursogrado_header_div">
				<p class="cursogrado_header_p fondo_celeste"><?=$t;?></p>
			</div>
			<ul>
				<?foreach ($pr[$id] as $li) {?>
				<li><?=$li;?></li>
				<?}?>
			</ul>
		</div>
	<?}?>
<?
	$sig=array("Formación de RRHH","formacion_rrhh.php");
	include '../siguiente.php';?>		
</div>
<?include '../pie_y_modal.php';?>
</body>
</html>