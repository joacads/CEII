<?
	require ('datos_noticias.php');
	$id=$_GET['id'];
	$info=utf8_encode($not[$id]['cuerpo']);
	$info=str_ireplace("\r","<br>",$info);
	$tit=utf8_encode($not[$id]['tit']);
	//$info=str_ireplace("\n","<br>",$info);
	?><p class="tit" style="color: #8790d2;"><span class="glyphicon glyphicon-stop"></span> <?=$tit;?></p>
	<hr>
	<br>
	<?if (strlen($info)>5) {?><div id="info_modal"><?=$info;?></div><?}?>
	<br>
	<hr>
	<br>
	<? foreach ($not[$id]['img'] as $f) {?>
	<div id="img_modal" style="	background: url('img/noticias/<?=$f;?>');
														background-size:contain;
														background-repeat:no-repeat;
														background-position:center;
														height: 60vh;
														width: 100%;" class="polaroid"></div><br>
	<?}?>