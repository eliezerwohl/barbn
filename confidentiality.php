<?php /* Template Name: Confidentiality */ ?>
<?php get_header(); ?>
<div class="container container-main">
  <div class="primary">
    <h1><?php the_field("confidentiality_header"); ?><br><span><?php the_field("confidentiality_sub_header"); ?></span></h1>
    <p><?php the_field("confidentiality_text"); ?></p>
    <div class="exceptions">
      <p><?php the_field("confidentiality_list_header"); ?></p>
      <ul>
        <?php while ( have_rows( 'list') ) { the_row(); ?>
          <li><?php the_sub_field('text'); ?></li>
      <?php }; ?>
      </ul>
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
