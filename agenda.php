 <?php   
session_start(); 
header('Content-Type: text/html; charset=utf-8');
?>
<?include('tarjeta.txt'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<? $tit='Agenda';?>
	<?require 'common.php';?>


</head>
<body class="fondo_grisecito">
<div class="container" style="max-width:1024px;">
	<? include ('encab_ceii.php');?>
	<!-- EVENTOS (AGENDA CULTURAL)-->
	<? require ('datos/datos_eventos.php');?>
	<div class="row smh">
		<p class="tit" style="color: #d28d14;"><span class="glyphicon glyphicon-stop"></span> Agenda </p>
		
		<? foreach ($ev as $i => $evento) {
			if (!$evento['eliminado']) {	?>
		<div class="col-sm-6">
			<div class="pepe anim_borde_naranja" style="margin-top:5px;">
				<div class="row"> <!--6 foto + 6 info-->
					<div class="col-sm-6">
						<img class="img-rounded" src="img/eventos/<?= $evento['img_mini'];?>" style="width: 100%;">
					</div>
					<div class="col-sm-6">
						<p class="tit_evento"><?= $evento['tit'];?></p>
						<p class="bajada_publ"><?= $evento['descr'];?></p>
						<button class="btn btn-info" onclick="lee_publ('<?= $evento['img'];?>','<?= $evento['link'];?>')" >Más info</button>
					</div>		
				</div>
			</div>
		</div>
			<?}
		}?>
	</div>
</div>
<?include 'pie_y_modal.php';?>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width: 80vw; height: 80vh;">
      <div class="modal-content" style="    width: 100%; height: 100%;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
				<br>
        <div class="modal-body" id="contenido_modal" style="height: 85%; width: 100%;">
        </div>
        <div class="modal-footer">
				 <a type="button" id="btn_link" class="btn btn-info" href="" target="_blank">Ir al sitio</a>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
      </div> 
    </div>
  </div>

	<script>
		function lee_publ(img,link) {
			pp="img/eventos/"+img;
			$('#contenido_modal').css('background','url('+pp+')');
			$('#contenido_modal').css('background-size','contain');
			$('#contenido_modal').css('background-repeat','no-repeat');
			$('#contenido_modal').css('background-position','center');
			$("#myModal").modal();
			$('#btn_link').attr('href',link);
			if (link.length>1) $('#btn_link').show(); else $('#btn_link').hide();
		}
	</script>
</body>
</html>