 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8');
?>
<?include('tarjeta.txt'); ?>
<!DOCTYPE html>
<html lang="es-AR">
<head>
	<? $tit='Inicio';?>
	<?require 'common.php';?>
	<link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/docencia.css?v=2406"/> <!--para los art[iculos-->
	<style>
		h3 { font-family:'Raleway', sans-serif; font-size:7vw;}
		
	</style>

</head>
<body class="fondo_grisecito">


<div class="container" style="max-width:1024px;">
	<? include ('encab_ceii.php');
	$texto=array("","Democracia","Innovación","Gobernabilidad","Cuidadanía");
	?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin: 0 15px; width: 96%;">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<? for ($x=1;$x<=4;$x++) {?>
				
			<div class="item <?if ($x==1) {echo 'active';}?>">
				
				<img src="/img/slide/sl<?echo $x;?>.jpg" alt="Paisaje de Mendoza">
				
				<div class="carousel-caption palabras-anim">
					<div style="background: rgba(54, 25, 25, .5);">
						<h3><?echo $texto[$x];?></h3>
					</div>
				</div>
			</div>
			<?}?>
		</div>

		<!-- carr:controles de izq y der -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span> 
		</a>
	</div>

	<!--QUIENES SOMOS-->
	<div class="row smh">
		<p class="tit" style="color: #6fa97c;"> <span class="glyphicon glyphicon-stop"></span> ¿Qué es el CEII?</p>
		<div class="pepe anim_borde_verde slideanim">
			<p class="just">El CEII fue creado originalmente con la denominación de Centro de Estudios sobre Innovación Institucional para la Gobernabilidad Democrótica en octubre de 2002, por resolución n° 205/02 del Consejo Directivo de la Facultad de Ciencias Políticas y Sociales de la UNCuyo (Mendoza, Argentina). Desde entonces funciona en dicho ámbito institucional y está integrado como unidad de investigación al Conicet</p>
		</div>
	</div>
	<a href="institucional/quienes_somos.php">
		<div class="cierre_tema slideanim grow_poco" style="background-color:#6fa97c;">
			Leer más sobre el CEII
		</div>
	</a>
	<br>

	<!-- EVENTOS (AGENDA CULTURAL)-->
	<? require ('datos/datos_eventos.php');?>
	<div class="row smh">
		<p class="tit" style="color: #d28d14;"><span class="glyphicon glyphicon-stop"></span> Agenda</p>
		
		<? $c=0;
		foreach ($ev as $i => $evento) {
			if(!$evento['eliminado']) {
				if ($c<4) {?>
					<div class="col-sm-6 slideanim">
						<div class="pepe anim_borde_naranja" style="margin-top:5px;">
							<div class="row"> <!--6 foto + 6 info-->
								<div class="col-sm-6">
									<img class="img-rounded" src="img/eventos/<?= $evento['img_mini'];?>" style="width: 100%;">
								</div>
								<div class="col-sm-6">
									<p class="tit_evento"><?= $evento['tit'];?></p>
									<p class="bajada_publ"><?= $evento['descr'];?></p>
									<button class="btn btn-info" onclick="lee_publ('<?=$i;?>','<?=$evento['link']?>')" >Más info</button>
								</div>		
							</div>
						</div>
					</div>
				<?}$c++;
			}
		}?>
	</div>
	<a href="agenda.php">
		<div class="cierre_tema slideanim grow_poco" style="background-color:#d28d14;">
			Ver más eventos 
		</div>
	</a>
	<br>
	
	<!-- NOTICIAS-->
	<? require ('datos/datos_noticias.php');?>
	<div class="row smh">
		<p class="tit" style="color: #8790d2;"><span class="glyphicon glyphicon-stop"></span> Noticias</p>
		<div class="col-sm-12 pepe  "> <!--(nica col)-->
		<? $c=0;
			foreach ($not as $i => $noticia) {
			if(!$noticia['eliminado']) {	
				if ($c<5) {?>
				<div class="media slideanim pepe anim_borde_celeste" onclick="lee_noticia(<?=$i;?>)">
					<div class="media-left media-middle">
						<img class="media-object" src="img/noticias/<?=$noticia['img_mini'];?>" style="width:100px; height:auto;">
					</div>
					<div class="media-body" style="padding: 0 15px; border-right: #cdcccc 1px solid;">
						<p style="margin-bottom: 0px;"><b><?=$noticia['tit'];?></b></p>
						<p class="noticia_cuerpo"><?=$noticia['cuerpo'];?></p>
					</div>
					<div class="media-left media-middle" style="padding: 0 15px;">
						<button class="media-right btn btn-primary" onclick="lee_noticia(<?=$i;?>)">Leer noticia</button>
						
					</div>					

					
				</div>
			<?}$c++;}}?>
		</div>
	</div>	
	

</div>
<?include 'pie_y_modal.php';?>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="    width: 70vw; height: 90vh;">
      <div class="modal-content" style="    width: 100%; height: 100%; overflow-y:scroll;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
				<br>
        <div class="modal-body" id="contenido_modal" style="">
					<!--<div id="info_modal"></div>
					<div id="img_modal"></div>-->
        </div>
        <div class="modal-footer">
				 <a type="button" id="btn_link" class="btn btn-info" href="" target="_blank">Ir al sitio</a>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
      </div> 
    </div>
  </div>

	<script>
		function lee_publ(id,link) {
			$.get('datos/ajax_lee_evento.php','id='+id,function(html) {
				$('#contenido_modal').html(html);
				$("#myModal").modal();
				$('#btn_link').attr('href',link);
				if (link.length>1) $('#btn_link').show(); else $('#btn_link').hide();						
			});
		}
		function lee_noticia(id) {
			$.get('datos/ajax_lee_noticia.php','id='+id,function(html) {
				$('#contenido_modal').html(html);
				$("#myModal").modal();
				$('#btn_link').hide();
			});
		}
	</script>
</body>
</html>