<?php /* Template Name: About Me */ ?>
<?php get_header();?>
<div class="container container-main">
  <div class="primary">
    <h1><?php the_field("about_me_header"); ?></h1>
    <div class="img-holder">
      <?php $image = get_field('about_me_img'); ?>
      <?php if($image){ ?> <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
      <?php } ?>
    </div>
    <?php the_field("about_me_text"); ?>
    <div class="education">
      <h2><?php the_field("education_header"); ?></h2>
      <?php the_field("education_text"); ?>
    </div>
  </div>
  <div class="second text-center">
    <div class="line-container">
      <div class="short-line"></div>
    </div>
    <h2><?php the_field("contact_header"); ?></h2>
    <p><?php the_field("contact_text"); ?>
    </p>
    <div class="btn-holder">
      <a href="#" class="btn btn-default">Call</a>
      <a href="#" class="btn btn-default">Email</a>
    </div>
  </div>
  <div class="bottom">
    <div class="line-container">
      <div class="short-line"></div>
    </div>
    <p class="warning bold">
    <?php if (lang() == "en"){ ?>
        <?php the_field("eng-emergency", "options"); ?>
    <?php } else { ?>
      <?php the_field("esp-emergency", "options"); ?>
    <?php } ?>
  </div>
</div>
<?php get_footer(); ?>
