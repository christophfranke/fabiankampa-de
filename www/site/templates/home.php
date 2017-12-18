<?php snippet('header'); ?>
<?php echo $page->introtext()->kirbytext(); ?>
<style>
<?php echo $page->css(); ?>
</style>
<?php
$index = 0;
foreach($page->linked_image()->yaml() as $li)
{
	$image = $li['image'];
	$link = $li['link'];
	snippet('image', compact('image', 'link', 'index'));
	$index++;
}
?>
<?php echo $page->vita()->kirbytext(); ?>
<?php echo $page->contact()->kirbytext(); ?>
<?php echo $page->impressum()->kirbytext(); ?>
<?php snippet('footer'); ?>