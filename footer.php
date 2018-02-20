</div>
<footer class="text-center">
	<div class="contact">
		<a class="contact-me" target="_blank" href="mailto:<?php the_field('email','option'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php the_field("e-mail", "option"); ?></a>
		<a class="contact-me" target="_blank" href="<?php the_field("google_map_link", "option"); ?>"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_field("address", "option"); ?></a>
		<a class="contact-me" target="_blank" href="tel:<?php the_field("phone", "option"); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field("phone", "option"); ?></a>
	</div>
	<div>
		<span class="bottom-contact">&copy; <?php echo date("Y"); ?> Barbara L. Nelson.  All rights reserved</span><span class="divider">|</span><span class="bottom-contact">Website by <a target="_blank" href="https://www.eandvdesign.com">E and V Design</a></span>
	</div>
	<?php wp_footer(); ?>
	</footer>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
</body>
</html>
