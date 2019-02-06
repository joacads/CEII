<?
	require ('datos_eventos.php');
	$id=$_GET['id'];
	$info=utf8_encode($ev[$id]['info']);
	$info=str_ireplace("\r","<br>",$info);
	$tit=utf8_encode($ev[$id]['tit']);
	//$info=str_ireplace("\n","<br>",$info);
	?><p class="tit" style="color: #d28d14;"><span class="glyphicon glyphicon-stop"></span> <?=$tit;?></p>
	<hr>
	<br>
	<?if (strlen($info)>5) {?><div id="info_modal"><?=$info;?></div><?}?>
	<br>
	<hr>
	<br>
	<div id="img_modal" style="	background: url('img/eventos/<?=$ev[$id]['img'];?>');
														background-size:contain;
														background-repeat:no-repeat;
														background-position:center;
														height: 60vh;
														width: 100%;"></div>