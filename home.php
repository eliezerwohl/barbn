<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="col-sm-6 img-well">
<?php $image = get_field('img'); ?>
	<?php if($image){ ?>
		<img  src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"> 
	<?php } ?>
</div>
<div class="col-sm-6 purple">
	<div class="qoute-outer">
		<div class="quote-well">
		 	<h2>“The individual has within him or herself vast resources for self-understanding.”</h2>
		 	<p>Donny Darko</p>
	 	</div>
	</div>
</div>
</div>
</div>
<div class="container">
	<div class='row'>
		<div class="col-md-12">
			<p>DO YOU FEEL that no one in the world really “gets” you? Are you confused about the direction
					your life is taking? Or worried about the direction of your child’s life? 
			</p>
			<p>I INVITE YOU to come and talk with me in a safe nonjudgmental environment where the “real you” can grow and flourish.</p>
			<p>TOGETHER WE can work to understand and resolve challenges and difficulties in your (or your chld’s) life so that it will be one worthy of celebrating.</p>
		</div>
		<div class="text-center col-md-12">
			<div class="long-line"></div>
		</div>
<?php get_footer(); ?>