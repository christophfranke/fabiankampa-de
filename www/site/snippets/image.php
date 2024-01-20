<?php
$id = "project-".$index;

if(!empty($color) && !empty($hover_color)){ ?>
<style>
div#<?= $id ?> .play-button {
    color: <?= $color ?>;
}
div#<?= $id ?> .play-button:hover {
    color: <?= $hover_color ?>;
}
</style>
<?php } ?>

<div id="<?= $id ?>" class="image-with-link">
<?php
if (!empty($link)) {
    ?><a href="<?= $link ?>" target="_blank"><i class="fas fa fa-play play-button" aria-hidden="true"></i><?php
}

// Check if $image is a file object and display the image
if ($image && $image->exists()) {
    echo '<img src="' . $image->url() . '" alt="' . $image->alt() . '">';
}

if (!empty($link)) {
    ?></a><?php
}
?>
</div>
