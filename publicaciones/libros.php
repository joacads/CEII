 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8'); ?>
<?include('../tarjeta.txt'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<? $tit='Libros';?>
	<?require '../common.php';?>
	<link rel="stylesheet" type="text/css" href="/css/docencia.css"/>
</head>
<body class="fondo_grisecito">


<div class="container" style="max-width:1024px;">
	<? require ('../encab_ceii.php');?>
	<? require ('../datos/datos_articulos.php');?>
	<p class="tit tit_con_borde" style="color: #8790d2;"><span class="glyphicon glyphicon-stop"></span> Libros</p>
	<div id="ant" class="row">
		<?
		foreach ($libro as $unLibro) {
				muestraArt ($unLibro,1);
		}
		?>
	</div>
<?
	$sig=array("Artículos","articulos.php");
	include '../siguiente.php';?>	
</div>
</body>
</html>

<?
	function muestraArt($item,$grupo) {?>
		<!--comienza ficha <?=$item['nombre'];?>-->
		<div class="pepe anim_borde_<?= ($grupo==0)?'naranja':'celeste';?> slideanim curso">
			<div class="row">
				<div class="col col-md-9" style="border-right: 1px black solid">
					<div><p class="curso_tit"><?=$item['tit'];?></p></div>
					<div><p class="curso_sub"><?=$item['sub'];?></p></div>
					<div><p class="curso_info"><?=$item['ano'] . ' - ' . $item['autor'];?></p></div>
				</div>
				<div class="col col-md-3 centro">
					<a href="../datos/pdf/<?=$item['pdf'];?>"> <img src="../img/pdf.png" style="height: 100px;"></a>
				</div>
			</div>
		</div>
<?}?>		
		
	<?include '../pie_y_modal.php';?>