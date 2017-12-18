<?php
$id = "project-".$index;
?>

<?php if(!empty($color) && !empty($hover_color)){ ?>
<style>
div#<?= $id ?> .play-button{
	color: <?= $color ?>;
}
div#<?= $id ?> .play-button:hover{
	color: <?= $hover_color ?>;
}
</style>
<?php } ?>



<div id="<?= $id ?>" class="image-with-link">
<?php

if(!empty($link))
{
	?><a href="<?= $link ?>" target="_blank"><i class="fas fa fa-play play-button" aria-hidden="true"></i><?php
}
echo image($image);

if(!empty($link))
{
	?></a><?php
}

?>
</div>

