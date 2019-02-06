 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8');
?>
<?include('../tarjeta.txt'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<? $tit='Grado';?>
	<?require '../common.php';?>
	<link rel="stylesheet" type="text/css" href="/css/docencia.css"/>
</head>
<body class="fondo_grisecito">


<div class="container" style="max-width:1024px;">
	<? require ('../encab_ceii.php');?>
	<? //require ('../datos/datos_posgrado.php');?>
	
	<p>Los integrantes del CEII han dictado o dictan:</p>
	<div class="pepe anim_borde_verde slideanim cursogrado">
		<div class="cursogrado_header_div">
			<p class="cursogrado_header_p fondo_verde">En la Carrera de Ciencia Política y Administración Publica (Facultad de Ciencias Políticas y Sociales, UNCuyo)</p>
		</div>
		<ul>
			<li>Estado, Sociedad y Política</li>
			<li>Teoría Política I (Contemporánea) </li>
			<li>Análisis Político</li>
			<li>Análisis de Políticas Públicas</li>
			<li>Metodología para la Investigación en Ciencia Política </li>
		</ul>
	</div>

	<div class="pepe anim_borde_verde slideanim cursogrado ">
		<div class="cursogrado_header_div">
			<p class="cursogrado_header_p fondo_verde">En la Licenciatura en Gestión y Administración Universitaria de la UNCuyo (Facultad de Ciencias Políticas y Sociales)</p>
		</div>
		<ul>
			<li>Estado, Universidad y Políticas Públicas</li>
			<li>Herramientas Informáticas</li>
		</ul>
	</div>

	<div class="pepe anim_borde_verde slideanim cursogrado ">
		<div class="cursogrado_header_div">
			<p class="cursogrado_header_p fondo_verde">En la Tecnicatura Universitaria de Producción Audiovisual de la UNCuyo (Facultad de Ciencias Políticas y Sociales)</p>
		</div>
		<ul>
			<li>Práctica Profesional</li>
		</ul>
	</div>
	

<?
	$sig=array("Capacitación","capacitacion.php");
	include '../siguiente.php';?>	
</div>
<?include '../pie_y_modal.php';?>
</body>
</html>