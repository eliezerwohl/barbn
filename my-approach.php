<?php /* Template Name: My Approach */ ?>
<?php get_header(); ?>
<div class="container container-main">
  <div class="primary">
    <h1><?php the_field("my_approach_header"); ?></h1>
    <?php the_field("my_approach_text"); ?>
  </div>
  <div class="second text-center">
    <a href="<?php the_field("contact_me_link"); ?>" class="btn btn-default">
      <?php the_field("contact_me_text"); ?>
    </a>
    <?php $image = get_field('image'); ?>
    <?php if($image){ ?> <img  class="img-hero" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
    <?php } ?>
  </div>
</div>
<?php get_footer(); ?>
