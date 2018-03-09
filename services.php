<?php /* Template Name: Services */ ?>
<?php get_header(); ?>
<div class="container container-main">
  <div class="primary">
    <div class="services">
      <h1><?php the_field("services_header"); ?></h1>
      <?php if( have_rows( 'service_section') ){ ?>
        <?php $counter = 0; $rowCount=count( get_field( 'service_section' ) ); ?>
        <?php while ( have_rows( 'service_section') ) { the_row(); $counter++ ?> <span class="service-section"><?php the_sub_field('text'); ?>
        <?php if ($counter != $rowCount){ echo "<span class='divider'>|</span>"; }?></span>
        <?php  } ?>
      <?php }; ?>
    </div>
    <div class="info">
      <h2><?php the_field("financial_information_header"); ?></h2>
      <?php while ( have_rows( 'financial_information') ) { the_row(); ?>
        <p><span class="bold"><?php the_sub_field("bold"); ?></span> <?php the_sub_field("text"); ?></p>
      <?php  } ?>
    </div>
  </div>
  <div class="second text-center">
    <?php $image = get_field('image'); ?>
    <?php if($image){ ?> <img  class="img-hero" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
    <?php } ?>
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
