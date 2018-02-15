<?php /* Template Name: First Visit*/ ?>
<?php $lang = lang(); ?>
<?php get_header(); ?>
<div class="container container-main">
  <div class="primary">
    <h1><?php the_field("first_visit_header"); ?></h1>
    <?php the_field("first_visit_text"); ?>
  </div>
  <div class="second">
    <div class="line-container">
      <div class="short-line"></div>
    </div>
    <div class="helpful">
      <h2><?php the_field("helpful_forms_header"); ?></h2>
      <?php the_field("helpful_forms_text"); ?>
    </div>
    <div class="forms">
      <?php if( have_rows( 'helpful_repeater') ){ ?>
        <?php $counter = 0; $rowCount=count( get_field( 'helpful_repeater' ) ); ?>
        <?php while ( have_rows( 'helpful_repeater') ) { the_row(); $counter++ ?>
          <?php if (get_sub_field("file")){ ?>
            <a download href="<?php the_sub_field("file"); ?>"><?php the_sub_field("text"); ?></a>
          <?php } else { ?>
          <?php the_sub_field("text"); ?>
          <?php } ?>
        <?php  } ?>
      <?php }; ?>
    </div>
  </div>
  <div class="bottom">
    <h4><a href="<?php the_field("questions_link"); ?>"><?php the_field("questions_text"); ?></a><h4>
  </div>
</div>
<?php get_footer(); ?>
