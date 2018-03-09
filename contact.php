<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<div class="container container-main">
  <div class="primary">
    <h1><?php the_field("contact_header"); ?></h1>
    <p><?php the_field("contact_text"); ?></p>
    <div class="row">
    <script src='https://www.google.com/recaptcha/api.js'></script>
        <form id="contactForm" action="/form" method="post" class="wpcf7-form" novalidate="novalidate">
          <div class="col-md-6">
            <span class="wpcf7-form-control-wrap text-874"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="<?php the_field("form_name"); ?>"></span>
          </div>
          <div class="col-md-6">
            <span class="wpcf7-form-control-wrap tel-738"><input type="tel" name="telephone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="<?php the_field("form_telephone"); ?>"></span>
          </div>
          <div class="col-md-6">
            <span class="wpcf7-form-control-wrap email-240"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="<?php the_field("form_email"); ?>"></span>
          </div>
          <div class="col-md-12">
            <p><?php the_field("date_time_message"); ?></p>
          </div>
          <div class="col-md-6">
            <span class="wpcf7-form-control-wrap date-240">
              <input type="date" name="date" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" placeholder="Date">
            </span>
          </div>
          <div class="col-md-6">
            <span class="wpcf7-form-control-wrap text-876">
              <input type="time" name="time" value="" size="40" class="wpcf7-form-control wpcf7-text contact" aria-invalid="false" placeholder="Time">
            </span>
          </div>
          <div class="col-md-12">
            <span class="wpcf7-form-control-wrap textarea-89"><textarea name="message" cols="1" rows="16" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="<?php the_field("form_message"); ?>"></textarea></span>
          </div>
          <div class="col-md-12 text-center">
            <p class="response error"><?php the_field("error_message"); ?></p>
            <p class="response thank"><?php the_field("sent_message"); ?></p>
          </div>
          <div class="col-md-12 captcha-holder">
            <div class="g-recaptcha" data-sitekey="6LdRoksUAAAAAJfj-3sKAHDRc2D4bz9bKpBGice1"></div>
          </div>
          <div class="btn-holder col-md-12">
            <a href="#" class="cancel btn btn-default"><?php the_field("cancel_button"); ?></a><a id="contactSubmit" class="wpcf7-form-control wpcf7-submit btn btn-default"><?php the_field("send_button"); ?> </a>
          </div>
        </form>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.267014780227!2d-74.45427048472149!3d40.469357479359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3c67dfa72f16b%3A0x58735e048f02b2c0!2s623+Georges+Rd%2C+North+Brunswick+Township%2C+NJ+08902!5e0!3m2!1sen!2sus!4v1519668371211" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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
