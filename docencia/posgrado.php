 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8');
?>
<?include('../tarjeta.txt'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<? $tit='Posgrado';?>
	<?require '../common.php';?>
	<link rel="stylesheet" type="text/css" href="/css/docencia.css"/>
</head>
<body class="fondo_grisecito">


<div class="container" style="max-width:1024px;">
	<? require ('../encab_ceii.php');?>
	<? require ('../datos/datos_posgrado.php');?>
	
	<p class="tit tit_con_borde" style="color: #d28d14;"><span class="glyphicon glyphicon-stop"></span> Actualmente</p>
	<div id="act" class="row">
		<?
		foreach ($act as $curso) {
				muestraCurso ($curso,'act');
		}
		?>
	</div>
	<br><br>
	<p class="tit tit_con_borde" style="color: #8790d2;"><span class="glyphicon glyphicon-stop"></span> Anteriormente</p>
	<div id="ant" class="row">
		<?
		foreach ($ant as $curso) {
				muestraCurso ($curso,'ant');
		}
		?>
	</div>
<?
	$sig=array("Grado","grado.php");
	include '../siguiente.php';?>	
</div>


<?
	function muestraCurso($item,$grupo) {?>
		<!--comienza ficha <?=$item['nombre'];?>-->
		<div class="pepe anim_borde_<?= ($grupo=='act')?'naranja':'celeste';?> slideanim curso">
			<div><p class="curso_tit"><?=$item['nombre'];?></p></div>
			<div><p class="curso_sub"><?=$item['sub'];?></p></div>
			<div><p class="curso_info"><?=$item['info'];?></p></div>
		</div>
<?}?>		
		

<?include '../pie_y_modal.php';?>
</body>
</html>