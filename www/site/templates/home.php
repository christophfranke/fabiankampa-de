<?php snippet('header'); ?>
<div class="row">
	<div class="col-sm">
		<?php echo $page->text()->kirbytext(); ?>
	</div>
</div>

<?php
$index = 0;
foreach($page->images() as $image)
{
	snippet('image', compact('image', 'index'));
	$index++;
}
?>
<?php snippet('footer'); ?>