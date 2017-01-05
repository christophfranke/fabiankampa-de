<?php snippet('header'); ?>
<?php echo $page->text()->kirbytext(); ?>

<?php
$index = 0;
foreach($page->images() as $image)
{
	snippet('image', compact('image', 'index'));
	$index++;
}
?>
<?php echo $page->vita()->kirbytext(); ?>
<?php echo $page->contact()->kirbytext(); ?>
<?php echo $page->impressum()->kirbytext(); ?>
<?php snippet('footer'); ?>