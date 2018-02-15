<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<div class="container container-main">
  <div class="primary">
    <h1><?php the_field("contact_header"); ?></h1>
    <p><?php the_field("contact_text"); ?></p>
    <div class="row">
      <?php if (lang() == "en"){  echo do_shortcode('[contact-form-7 id="133" title="Contact form 1"]'); }
      else { echo do_shortcode('[contact-form-7 id="217" title="Contact-esp"]'); } ?>
    </div>
    <p class="bold text-center"><?php the_field("by_clicking_text"); ?></p>
    <p class="warning bold text-center">
    <?php if (lang() == "en"){ ?>
      <?php the_field("eng-emergency", "options"); ?>
    <?php } else { ?>
      <?php the_field("esp-emergency", "options"); ?>
    <?php } ?>
    </p>
    <div class="line-container">
      <div class="short-line"></div>
    </div>
  </div>
  <div class="second text-center">
    <div class="map-container row">
      <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.5318087966857!2d-74.42143308472023!3d40.50773507935458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c7cf9603dcc7%3A0xf8c267e05c206c8e!2s112+Highland+Ave%2C+Edison%2C+NJ+08817!5e0!3m2!1sen!2sus!4v1517851041747" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
        <div class="table">
          <div class="txt">
            <p><span class="bold"><?php the_field("address_text"); ?>:</span> <?php the_field("address", "option"); ?></p>
            <p><span class="bold"><?php the_field("telephone_text"); ?>:</span> <?php the_field("phone", "option"); ?></p>
            <p><span class="bold"><?php the_field("email_text"); ?>:</span> <?php the_field("e-mail", "option"); ?></p>
          </div>
        </div>
      </div>
    </div>
    <?php $image = get_field('image'); ?>
    <?php if($image){ ?> <img  class="img-hero" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
    <?php } ?>
  </div>
</div>

<?php get_footer(); ?>
