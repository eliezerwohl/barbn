<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="quote-container">
  <div class="container-fluid">
    <div class="row is-table-row">
      <div class="col-sm-6 col-xs-12 img-well">
        <?php $image = get_field('img'); ?>
        <?php if($image){ ?>
        <img  src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"> 
        <?php } ?>
      </div>
      <div class="col-sm-6 col-xs-12 purple">

          <div class="quote-well">
            <h2><?php the_field("quote"); ?></h2>
            <h4><?php the_field("author"); ?></h4>
     
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container main">
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
  <div class="row sections">
    <div class="col-md-12">
    <?php if( have_rows( 'service_section_link') ){ ?>
      <div>
      <?php $counter = 0; $rowCount=count( get_field( 'service_section_link' ) ); ?>
      <?php while ( have_rows( 'service_section_link') ) { the_row(); $counter++ ?>
        <span><a href="<?php echo get_field('service_section_url') . '#' . get_sub_field('hash') ?>"><?php the_sub_field('text'); ?></a>
        <?php if ($counter != $rowCount){ echo "<span class='divider'>|</span>"; }?></span>
    <?php  } ?> </div> <?php }; ?>
    </div>
  </div>
  <div class="text-center col-md-12">
    <div class="short-line"></div>
  </div>
</div>
<div id="about-me" class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>About Me</h2>
        <p>I am a bilingual licensed clinical social worker with a private practice in North Brunswick, NJ, who has been in the caring and helping professions in the healthcare arena since 1993. Therapy sessions are conducted in English and Spanish. I specialize in working with individuals who have experienced trauma. My focus in this area is twofold: childhood sexual abuse (victims and nonoffending parents) and eating/weight problems. Just as importantly, I also work with individuals who are experiencing depression, anxiety, grief and loss, family issues, stage of life issues, and sexuality issues. </p>

        <p>I provide a safe environment to encourage trust, connection, and openness. My approach...<a class="read-more" href="#">read more</a>
        </p>
      </div>
    </div>
  </div>
</div>
<div id="contact-div" class="container">
  <div class="text-center col-md-12">
    <div class="short-line"></div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2>Contact Me</h2>
      <p class="text-center">To schedule an appointment or to obtain further information please fill out the form on my contact page or call me 
at (908) 698-9164.</p>
      <div class="btn-holder">
        <a class="btn   btn-default" href="#">Call</a><a class="btn   btn-default" href="#">Email</a>
      </div>
    </div>
  </div>
   <div class="text-center col-md-12">
    <div class="short-line"></div>
  </div>
  <div class="warning">
    If you are experiencing an emotional crisis please dial 911 or go to the nearest emergency room. 
  </div>

</div>


<?php get_footer(); ?>