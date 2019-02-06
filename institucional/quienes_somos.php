 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8'); ?>
<?include('../tarjeta.txt'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<? $tit='Quiénes somos';?>
	<?require '../common.php';?>
	<link rel="stylesheet" type="text/css" href="/css/quienes_somos.css?v=2406"/>
</head>
<body class="fondo_grisecito">


<div class="container" style="max-width:1024px;">
	<? include ('../encab_ceii.php');?>
	<? include ('../datos/datos_quienes_somos.php');
		 $i=6;$t=0;
	?>

	<div class="row">
		<p class="tit" style="color: #6fa97c;"> <span class="glyphicon glyphicon-stop"></span> Quiénes somos</p>
		
		<!--<div class="div_izq"><img class="polaroid" src="../img/slide/sl<?=$i--;?>.jpg"></div>-->
		<p class="p16 just"><?=$qs[$t++];?></p><br>
		<!--<div class="div_der"><img class="polaroid" src="../img/slide/sl<?=$i--;?>.jpg"></div>-->
		<p class="p16 just"><?=$qs[$t++];?></p><br>                  
		<p class="p16 just"><?=$qs[$t++];?></p><br>                  
		<!--<div class="div_izq"><img class="polaroid" src="../img/slide/sl<?=$i--;?>.jpg"></div>-->
		<p class="p16 just"><?=$qs[$t++];?></p><br>                  
		<p class="p16 just"><?=$qs[$t++];?></p><br>                  
		<!--<div class="div_der"><img class="polaroid" src="../img/slide/sl<?=$i--;?>.jpg"></div>-->
		<p class="p16 just"><?=$qs[$t++];?></p><br>                  
		<!--<div class="div_izq"><img class="polaroid" src="../img/slide/sl<?=$i--;?>.jpg"></div>-->
		<p class="p16 just"><?=$qs[$t++];?></p><br>                  
		<p class="p16 just"><?=$qs[$t++];?></p><br>                  
		<!--<div class="div_der"><img class="polaroid" src="../img/slide/sl<?=$i--;?>.jpg"></div>-->
		<p class="p16 just"><?=$qs[$t++];?></p><br>
		<p class="p16 just"><?=$qs[$t++];?></p><br>

	</div>
<?$sig=array("Integrantes","integrantes.php");
include '../siguiente.php';?>
</div>
<?include '../pie_y_modal.php';?>
<script href="/scroll.js"/>
</body>
</html>