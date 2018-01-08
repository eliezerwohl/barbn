<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="col-sm-6 img-well">
<?php $image = get_field('img'); ?>
	<?php if($image){ ?>
		<img  src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"> 
	<?php } ?>
</div>
<div class="col-sm-6 purple">
	<div class="quote-well">
	 	<h2>“The individual has within him or herself vast resources for self-understanding.”</h2>
	 	<p>Big Dick Dudley</p>
 	</div>
</div>
<?php get_footer(); ?>