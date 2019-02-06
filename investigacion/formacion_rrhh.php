 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8'); ?>
<?include('../tarjeta.txt'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<? $tit='Formación RRHH';?>
	<?require '../common.php';?>
	<link rel="stylesheet" type="text/css" href="/css/docencia.css"/>
	<style>
		.cursogrado li {margin-bottom: 10px;}
	</style>

</head>
<body class="fondo_grisecito">


<div class="container" style="max-width:1024px;">
	<? require ('../encab_ceii.php');?>
	<? require ('../datos/datos_rrhh.php');
	
	foreach ($tn1 as $n1 => $t1) {?>
		<p class="tit tit_con_borde" style="color: #d28d14;"><span class="glyphicon glyphicon-stop"></span><?=$t1;?></p>
		<?foreach ($tn2[$n1] as $n2 => $t2) {?>
			<div class="pepe anim_borde_celeste slideanim cursogrado">
				<div class="cursogrado_header_div">
					<p class="cursogrado_header_p fondo_celeste"><?=$t2;?></p>
				</div>
				<ul>		
					<?foreach ($tn3[$n2] as $n3 => $t3) {?>
						<li><?=$t3;?></li>
					<?}?>
				</ul>
			</div>
		<?}
		}
	$sig=array("Consultoría","../consultoria.php");
	include '../siguiente.php';?>	

</div>
<?include '../pie_y_modal.php';?>
</body>
</html>