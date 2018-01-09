<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="container-fluid">
  <div class="row is-table-row">
    <div class="col-sm-6 col-xs-12 img-well">
      <?php $image = get_field('img'); ?>
      <?php if($image){ ?>
      <img  src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"> 
      <?php } ?>
    </div>
    <div class="col-sm-6 col-xs-12 purple">
      <div class="qoute-outer">
        <div class="quote-well">
          <h2><?php the_field("quote"); ?></h2>
          <h4><?php the_field("author"); ?></h4>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class='row'>
    <div class="col-md-12">
      <p><span class="letter-lg">D</span><span class="letter-md">O YOU FEEL</span> that no one in the world really “gets” you? Are you confused about the direction
        your life is taking? Or worried about the direction of your child’s life? 
      </p>
      <p><span class="letter-lg">I</span> <span class="letter-md">INVITE YOU</span> to come and talk with me in a safe nonjudgmental environment where the “real you” can grow and flourish.</p>
      <p><span class="letter-lg">T</span><span class="letter-md">OGETHER WE</span> can work to understand and resolve challenges and difficulties in your (or your chld’s) life so that it will be one worthy of celebrating.</p>
    </div>
    <div class="text-center col-md-12">
      <div class="long-line"></div>
    </div>
  </div>
</div>
<?php get_footer(); ?>