 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8');
?>
<?include('../tarjeta.txt'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<? $tit='Capacitación';?>
	<?require '../common.php';?>
	<link rel="stylesheet" type="text/css" href="/css/docencia.css"/>
</head>
<body class="fondo_grisecito">


<div class="container" style="max-width:1024px;">
	<? require ('../encab_ceii.php');?>
	<? //require ('../datos/datos_posgrado.php');?>
	

	<div class="pepe anim_borde_ocre slideanim cursogrado">
		<div class="cursogrado_header_div">
			<p class="cursogrado_header_p fondo_ocre">En el área de Capacitación Específica, Secretaria de Gestión Económica y de Servicios (Rectorado, UNCuyo) los integrantes del CEII han dictado o dictan:</p>
		</div>
		<ul>
			<li>Curso de Capacitación para el uso del Programa Estadístico SPSS  (Nivel Inicial) </li>
			<li>Curso de Capacitación para el uso del Programa Estadístico SPSS  (Nivel Avanzado)</li>
			<li>Curso Taller Formulación de Proyecto de Investigación</li>
		</ul>
	</div>

	<div class="pepe anim_borde_ocre slideanim cursogrado">
		<div class="cursogrado_header_div">
			<p class="cursogrado_header_p fondo_ocre">En la Facultad de Ciencias Políticas y Sociales (UNCuyo), se ha capacitado a estudiantes y graduados en:</p>
		</div>
		<ul>
			<li>Observación Electoral</li>
			<li>Realización y Supervisión de Encuestas</li>
			<li>Grupos Focales y técnicas de investigación</li>
			<li>Codificación, carga y análisis de datos con SPSS.</li>
		</ul>
	</div>
<?
	$sig=array("Programas / Proyectos","../investigacion/programas.php");
	include '../siguiente.php';?>	
</div>
<?include '../pie_y_modal.php';?>
</body>
</html>