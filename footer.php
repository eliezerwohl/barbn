</div>
<footer class="text-center">
	<span itemscope itemtype="http://schema.org/LocalBusiness">
	<meta itemprop="name" content="Barbara L. Nelson LCSW">
  <meta itemprop="image" content="https://barbaralnelson.com/wp-content/uploads/2018/01/headshot-2-square.png">
  <span itemtype="http://schema.org/PostalAddress" itemscope itemprop="address">
  <meta itemprop="streetAddress" content="623 Georges Rd.">
  <meta itemprop="addressLocality" content="North Brunswick">
  <meta itemprop="addressRegion" content="NJ">
  <meta itemprop="postalCode" content= "08902"></span>
	<div class="contact">
		<a class="contact-me" target="_blank" href="mailto:<?php the_field('email','option'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span itemprop="email"><?php the_field("e-mail", "option"); ?></span></a>
		<a class="contact-me" target="_blank" href="<?php the_field("google_map_link", "option"); ?>"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_field("address", "option"); ?></a>
		<a class="contact-me" target="_blank" href="tel:<?php echo str_replace(' ', '', get_field('phone', 'option')); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <span itemprop="telephone"><?php the_field("phone", "option"); ?></span></a>
	</div>
	<div>
		<span class="bottom-contact">&copy; <?php echo date("Y"); ?> Barbara L. Nelson.  All rights reserved</span><span class="divider">|</span><span class="bottom-contact">Website by <a target="_blank" href="https://www.eandvdesign.com">E and V Design</a></span>
	</div>
	<?php wp_footer(); ?>
	</footer>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/contact.js"></script>
</body>
</html>
