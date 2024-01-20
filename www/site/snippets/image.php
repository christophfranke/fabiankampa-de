<?php
$id = "project-".$index;

var_dump($color, $hover_color, $link, $image, $id);
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
if(!empty($link)) {
    ?><a href="<?= $link ?>" target="_blank"><i class="fas fa fa-play play-button" aria-hidden="true"></i><?php
}

// Loop through each image identifier in the array
foreach ($image as $imgIdentifier) {
    // Check if the identifier is a string
    if (is_string($imgIdentifier)) {
        // Retrieve the file object from Kirby using the identifier
        // Assuming $page is your current page object
        $file = $page->file($imgIdentifier);

        // Display the image if the file exists
        if ($file && $file->exists()) {
            echo '<img src="' . $file->url() . '" alt="' . $file->alt() . '">';
        }
    }
}

if(!empty($link)) {
    ?></a><?php
}
?>
</div>
