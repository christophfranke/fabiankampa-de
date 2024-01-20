<?php snippet('header'); ?>
<?php echo $page->introtext()->kirbytext(); ?>

<style>
<?php
// Loop through each block in the 'css' field
foreach ($page->css()->toBlocks() as $block) {
    // Check if the block is of the type 'code'
    if ($block->type() == 'code') {
        // Echo the code content
        echo $block->code();
    }
}
?>
</style>

<?php
$index = 0;
foreach($page->linked_image()->toStructure() as $li) {
    $image = $li->image()->toFile();
    $link = $li->link()->toUrl();
    $color = $li->color();
    $hover_color = $li->hover_color();

    if($image) {
        snippet('image', ['image' => $image, 'link' => $link, 'color' => $color, 'hover_color' => $hover_color, 'index' => $index]);
        $index++;
    }
}
?>
<?php echo $page->vita()->kirbytext(); ?>
<?php echo $page->contact()->kirbytext(); ?>
<?php echo $page->impressum()->kirbytext(); ?>
<?php snippet('footer'); ?>
